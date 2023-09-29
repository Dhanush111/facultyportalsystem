<?php


// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data from the POST request
$name = $_POST['name'];
$subject_code = $_POST['subject_code'];
$subject_name = $_POST['subject_name'];
$dealing_type = $_POST['dealing_type'];
$dealing_reason = $_POST['dealing_reason'];

// Insert the data into the studeal table
$sql = "INSERT INTO studeal (name, subject_code, subject_name, dealing_type, dealing_reason) VALUES ('$name', '$subject_code', '$subject_name', '$dealing_type', '$dealing_reason')";

if ($conn->query($sql) === TRUE) {
  header("Location: studeal.html");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
