<?php
// Define database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'facpor');

// Create database connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect to add into db. " . mysqli_connect_error());
}

// Escape user inputs for security
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$designation = mysqli_real_escape_string($conn, $_REQUEST['designation']);
$doj = mysqli_real_escape_string($conn, $_REQUEST['doj']);
$mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$experience = mysqli_real_escape_string($conn, $_REQUEST['experience']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// Attempt to insert data into faculty table
$sql = "INSERT INTO faculty (id, name, designation, doj, mobile, email, address, experience, password) VALUES ('$id', '$name', '$designation', '$doj', '$mobile', '$email', '$address', '$experience', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: add_faculty.html");
    exit();
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
