<?php
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$faculty_name = $_POST['faculty_name'];
$report_link = $_POST['report_link'];
$month = $_POST['month'];
$feedback = $_POST['feedback'];
$improvements = $_POST['improvements'];

// Prepare and execute SQL statement to insert data into database
$stmt = mysqli_prepare($conn, "INSERT INTO monthly_reports (faculty_name, report_link, month, feedback, improvements) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssss", $faculty_name, $report_link, $month, $feedback, $improvements);
if (mysqli_stmt_execute($stmt)) {
    header("Location: monthlyreport.html");
    exit();
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
