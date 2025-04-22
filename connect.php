<?php
// Database connection info
$host = "localhost";
$dbname = "login";
$username = "root";
$password = "";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Connect to database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data
$sql = "INSERT INTO enrollments (name, email, phone, message) 
        VALUES ('$name', '$email', '$phone', '$message')";

if (mysqli_query($conn, $sql)) {
    // Redirect to index.php after successful insert
    header("Location: index.php?message=success");
    exit(); // Stop further execution
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
