<?php

// Validate the form data
if (empty($_POST['report_date']) || empty($_FILES['report_pdf']['name'])) {
    die("Error: Please fill out all required fields.");
}

// Connect to the database
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the query
$stmt = $conn->prepare("INSERT INTO reports (report_date, report_pdf) VALUES (?, ?)");
$stmt->bind_param("ss", $report_date, $report_pdf);

// Set the parameters and execute the query
$report_date = $_POST['report_date'];
$report_pdf = file_get_contents($_FILES['report_pdf']['tmp_name']);
$stmt->execute();

// Close the database connection
$stmt->close();
$conn->close();

// Redirect the user back to the homepage
header("Location: index.php");
exit();

?>
