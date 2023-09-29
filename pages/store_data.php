<?php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve form data
    $faculty_name = $_POST['faculty_name'];
    $webinar_name = $_POST['webinar_name'];
    $about = $_POST['about'];

    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "facpor";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into table
    $sql = "INSERT INTO faculty_webinars (faculty_name, webinar_name, about) VALUES ('$faculty_name', '$webinar_name', '$about')";

    if (mysqli_query($conn, $sql)) {
        header("Location: webinars.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
