<?php
session_start();
$_SESSION['email'] = "user@example.com"; // Example session value for testing
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and Drop System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1>Upload Item</h1>
        <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="drop-zone" id="dropZone">
                <p>Drag & Drop an image here or click to select</p>
                <input type="file" name="image" id="imageInput" accept="image/*" hidden>
            </div>
            <input type="file" name="images" id="imagesInput" hidden>
            
            <select name="category" required>
                <option value="" disabled selected>Select Category</option>
                <option value="Electronics">Electronics</option>
                <option value="Clothing">Clothing</option>
                <option value="Books">Books</option>
            </select>
            <input type="text" name="description" placeholder="Short Description" required>
            <input type="number" name="price" placeholder="Price" step="0.01" required>
            <button type="submit" onclick="return true;">Upload</button>
        </form>
    </div>
    <script>
    // Get the input elements
    const imageInputh = document.getElementById('imageInput');
    const imagesInputh = document.getElementById('imagesInput');

    // Add an event listener for changes in the first input
    imageInputh.addEventListener('change', () => {
        if (imageInputh.files.length > 0) {
            // Create a new FileList to copy the selected file
            const file = imageInputh.files[0];
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);

            // Assign the copied FileList to the second input
            imagesInputh.files = dataTransfer.files;
        }
    });
</script>
    <script src="script.js"></script>
   
</body>
</html>
