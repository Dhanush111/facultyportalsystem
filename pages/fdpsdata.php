<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $program = $_POST['program'];
  $skills = $_POST['skills'];

  // Store data in database
  $sql = "INSERT INTO faculty_development (name, program, skills)
          VALUES ('$name', '$program', '$skills')";

  if (mysqli_query($conn, $sql)) {
    header("Location: fdps.html");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
}
?>
