<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$facultyName = $_POST["facultyName"];
$subjectCode = $_POST["subjectCode"];
$passPercentage = $_POST["passPercentage"];
$numPassed = $_POST["numPassed"];
$numTotal = $_POST["numTotal"];
$semester = $_POST["semester"];

// Prepare the SQL statement
$sql = "INSERT INTO passpercentage (facultyName, subjectCode, passPercentage, numPassed, numTotal, semester)
        VALUES ('$facultyName', '$subjectCode', '$passPercentage', '$numPassed', '$numTotal', '$semester')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    header("Location: passperc.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
