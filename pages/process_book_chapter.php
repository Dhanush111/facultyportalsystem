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
$book_title = $_POST['book_title'];
$book_authors = $_POST['book_authors'];
$chapter_title = $_POST['chapter_title'];
$chapter_authors = $_POST['chapter_authors'];
$chapter_publication_date = $_POST['chapter_publication_date'];
$chapter_pages = $_POST['chapter_pages'];

// Prepare and execute SQL query
$sql = "INSERT INTO book_chapters (book_title, book_authors, chapter_title, chapter_authors, chapter_publication_date, chapter_pages) VALUES ('$book_title', '$book_authors', '$chapter_title', '$chapter_authors', '$chapter_publication_date', '$chapter_pages')";
if (mysqli_query($conn, $sql)) {
    header("Location: bookchapt.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
