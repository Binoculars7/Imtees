<?php
include "../config.php";

// Get JSON data from the request
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Extract user data
$fname = $conn->real_escape_string($data['fname']);
$email = $conn->real_escape_string($data['email']);
$googleId = $conn->real_escape_string($data['googleId']);
$date = date("Y-m-d");

// Check if the email already exists
$emailCheckQuery = "SELECT * FROM signup WHERE EMAIL = '$email'";
$result = $conn->query($emailCheckQuery);

if ($result->num_rows > 0) {
    echo "Account already exists. Please log in.";
} else {
    // Insert new user data into the database
    $sql = "INSERT INTO signup (FNAME, EMAIL, PASS, DATES) VALUES ('$fname', '$email', '', '$date')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['email'] = $email;
        echo "Account created successfully with Google!";
        header("Location: ../login");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
