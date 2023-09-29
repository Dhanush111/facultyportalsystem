<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Get form data
$faculty_name = $_POST['faculty_name'];
$lab_code = $_POST['lab_code'];
$lab_name = $_POST['lab_name'];
$work_type = $_POST['work_type'];
$work_description = $_POST['work_description'];
$assigned_date = $_POST['assigned_date'];
$due_date = $_POST['due_date'];


// Insert data into database
$sql = "INSERT INTO assigned_work (faculty_name, lab_code, lab_name, work_type, work_description, assigned_date, due_date) 
        VALUES ('$faculty_name', '$lab_code', '$lab_name', '$work_type', '$work_description', '$assigned_date', '$due_date')";

if ($conn->query($sql) === TRUE) {
  header("Location: lab.html");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();

?>
