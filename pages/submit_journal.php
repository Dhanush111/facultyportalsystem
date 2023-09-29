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
$journal_title = $_POST['journal_title'];
$journal_authors = $_POST['journal_authors'];
$journal_publication_date = $_POST['journal_publication_date'];
$journal_publisher = $_POST['journal_publisher'];

// Prepare and execute SQL query
$sql = "INSERT INTO journals (journal_title, journal_authors, journal_publication_date, journal_publisher) VALUES ('$journal_title', '$journal_authors', '$journal_publication_date', '$journal_publisher')";
if (mysqli_query($conn, $sql)) {
    header("Location: journal.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
