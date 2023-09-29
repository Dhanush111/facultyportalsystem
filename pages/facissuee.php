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
$issueType = $_POST["issueType"];
$issueDescription = $_POST["issueDescription"];
$dateOccurred = $_POST["dateOccurred"];

// Prepare the SQL statement
$sql = "INSERT INTO faculty_issues (facultyName, issueType, issueDescription, dateOccurred)
        VALUES ('$facultyName', '$issueType', '$issueDescription', '$dateOccurred')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    header("Location: facissue.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
