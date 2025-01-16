<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? '';
    $email = $_SESSION['email'] ?? '';
    $date = date('Y-m-d');
    $color = 'black';

    if (!isset($_FILES['images'])) {
        die("Error: No file uploaded.");
    }

    $image = $_FILES['images'];

    // Check for upload errors
    if ($image['error'] !== UPLOAD_ERR_OK) {
        $errors = [
            UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
            UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive specified in the HTML form.',
            UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded.',
            UPLOAD_ERR_NO_FILE => 'No file was uploaded.',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
            UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
        ];
        die("Upload error: " . ($errors[$image['error']] ?? "Unknown error"));
    }

    // Validate file type (only images)
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($image['type'], $allowedTypes)) {
        die("Error: Only JPEG, PNG, and GIF files are allowed.");
    }

    // Generate a unique name for the uploaded file
    $imageName = uniqid() . '-' . basename($image['name']);
    $uploadDir = '../../../home/shops/images/';
    $uploadDirr = '../../../home/shops/item/images/';
    $uploadPath = $uploadDir . $imageName;

    // Ensure the upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Move uploaded file to the destination directory
    if (!move_uploaded_file($image['tmp_name'], $uploadPath)) {
        die("Error: Failed to move the uploaded file.");
    }

    // Save to database
    $conn = new mysqli('localhost', 'root', '', 'imtees');
    if ($conn->connect_error) {
        die('Database connection failed: ' . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO items (NAME, CATEGORY, DESCRIPTION, PRICE, DATES, EMAIL, COLOR) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $imageName, $category, $description, $price, $date, $email, $color);

    if ($stmt->execute()) {
        header('location: ../../../home/shops');
    } else {
        echo "Database error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    die("Error: Invalid request method.");
}
?>
