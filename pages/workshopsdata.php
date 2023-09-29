<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $workshop = $_POST["workshop"];
  $location = $_POST["location"];
  $date = $_POST["date"];

  // Your database query to insert data here
  $sql = "INSERT INTO workshops (name, workshop, location, date) VALUES ('$name', '$workshop', '$location', '$date')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: workshops.html");
    exit();
  } else {
    echo "Error inserting data: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
