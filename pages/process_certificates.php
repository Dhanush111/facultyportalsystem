<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO certificates (faculty_name, certificate_title, date_issued) VALUES (:faculty_name, :certificate_title, :date_issued)");

$stmt->bindParam(':faculty_name', $faculty_name);
$stmt->bindParam(':certificate_title', $certificate_title);
$stmt->bindParam(':date_issued', $date_issued);

// Set parameter values from form data
$faculty_name = $_POST['faculty_name'];
$certificate_title = $_POST['certificate_title'];
$date_issued = $_POST['date_issued'];


// Execute SQL statement
if ($stmt->execute()) {
    // Redirect to certificates.html on success
    header('Location: certificates.html');
    exit;
} else {
    echo "Error: " . $stmt->errorInfo()[2];
}

// Close connection
$conn = null;
?> 