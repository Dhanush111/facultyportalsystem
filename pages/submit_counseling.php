<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security
$faculty_name = mysqli_real_escape_string($conn, $_POST['faculty_name']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
$course_code = mysqli_real_escape_string($conn, $_POST['course_code']);
$counseling_summary = mysqli_real_escape_string($conn, $_POST['counseling_summary']);

// Attempt insert query execution
$sql = "INSERT INTO counseling_info (faculty_name, date, student_name, course_code, counseling_summary) 
        VALUES ('$faculty_name', '$date', '$student_name', '$course_code', '$counseling_summary')";

if (mysqli_query($conn, $sql)) {
  header("Location: counsel.html");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
