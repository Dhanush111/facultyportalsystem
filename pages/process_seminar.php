<?php
// Establish connection to the database
$host = "localhost";
$user = "root";
$password = "";
$database = "facpor";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$faculty_name = $_POST['faculty_name'];
$seminar_title = $_POST['seminar_title'];
$seminar_date = $_POST['seminar_date'];
$seminar_location = $_POST['seminar_location'];

// Prepare and execute SQL query
$sql = "INSERT INTO seminars (faculty_name, seminar_title, seminar_date, seminar_location) VALUES ('$faculty_name', '$seminar_title', '$seminar_date', '$seminar_location')";
if (mysqli_query($conn, $sql)) {
    header("Location: seminars.html");
    exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>