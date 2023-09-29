<?php
// Define database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'facpor');

// Create database connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if the login form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Define email and password variables
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare SQL statement to retrieve faculty data
    $sql = "SELECT id FROM faculty WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // Execute the SQL statement
    mysqli_stmt_execute($stmt);

    // Check if there is a row returned from the query
    if (mysqli_stmt_fetch($stmt)) {
        // Redirect to faculty dashboard
        header("Location: faculty_dashboard.html");
        exit();
    } else {
        // Show error message for incorrect credentials
        header("Location: faculty_login.html?error=incorrect_credentials");
    }
}

// Close database connection
mysqli_close($conn);
?>
