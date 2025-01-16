<?php
include "../config.php";

// Get the JSON data from the request
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Extract user details
$google_id = $conn->real_escape_string($data['google_id']);
$fname = $conn->real_escape_string($data['name']); // Storing the user's name
$email = $conn->real_escape_string($data['email']);
$date = date("Y-m-d"); // Current timestamp

// Check if the user already exists in the database
$query = "SELECT * FROM signup WHERE EMAIL = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // User exists, log them in
    echo "Login successful. Welcome back, $fname!";
    header("Location: ../../home/shops/");
} else {

    if ($fname == "" || $email == "") {
        
    }else {
         // New user, insert them into the database
        $insertQuery = "INSERT INTO signup (FNAME, EMAIL, PASS, DATES) VALUES ('$fname', '$email', '$google_id', '$date')";
        if ($conn->query($insertQuery) === TRUE) {
            $_SESSION['email'] = $email;
            echo "Account created and logged in successfully. Welcome, $fname!";
            header("Location: ../../home/shops/");
            
        } else {
            echo "Error: " . $conn->error;
        }
    }

   
}
?>
