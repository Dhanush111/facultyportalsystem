<?php
// Connect to MySQL database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'facpor';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$designation = $_POST['designation'];
$doj = $_POST['doj'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];

// Insert data into faculty table
$sql = "INSERT INTO faculty (id, name, designation, doj, mobile, email, address)
VALUES ('$id', '$name', '$designation', '$doj', '$mobile', '$email', '$address')";

if (mysqli_query($conn, $sql)) {
  echo "Faculty added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
