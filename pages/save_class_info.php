<?php
// Get the form data from the POST request
$name = $_POST['name'];
$num_classes = $_POST['num_classes'];
$subject_code = $_POST['subject_code'];
$subject_name = $_POST['subject_name'];
$class_date = $_POST['class_date'];
$about_topic = $_POST['about_topic'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the classtaken table
$sql = "INSERT INTO classtaken (name, num_classes, subject_code, subject_name, class_date, about_topic) 
        VALUES ('$name', $num_classes, '$subject_code', '$subject_name', '$class_date', '$about_topic')";


if ($conn->query($sql) === TRUE) {
    // Redirect to classtaken.html on successful insertion
    header("Location: classestaken.html");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();