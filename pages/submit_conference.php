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
$conference_title = $_POST['conference_title'];
$conference_authors = $_POST['conference_authors'];
$conference_publication_date = $_POST['conference_publication_date'];
$conference_location = $_POST['conference_location'];

// Prepare and execute SQL query
$sql = "INSERT INTO conferences (conference_title, conference_authors,conference_publication_date, conference_location) VALUES ('$conference_title', '$conference_authors', '$conference_publication_date', '$conference_location')";
if (mysqli_query($conn, $sql)) {
    header("Location: conferences.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
