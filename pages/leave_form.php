<?php
// Step 1: Create a database connection
$dbhost = "localhost";
$dbuser = "root"; // replace with your MySQL username
$dbpass = ""; // replace with your MySQL password
$dbname = "facpor";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
  );
}

// Step 2: Process the form data
$faculty_name = mysqli_real_escape_string($connection, $_POST['faculty_name']);
$leave_date = mysqli_real_escape_string($connection, $_POST['leave_date']);
$leaves_allotted = mysqli_real_escape_string($connection, $_POST['leaves_allotted']);
$leaves_taken = mysqli_real_escape_string($connection, $_POST['leaves_taken']);

// Step 3: Insert the data into the database
$query = "INSERT INTO faculty_leaves (faculty_name, leave_date, leaves_allotted, leaves_taken) ";
$query .= "VALUES ('{$faculty_name}', '{$leave_date}', {$leaves_allotted}, {$leaves_taken})";
$result = mysqli_query($connection, $query);

// Step 4: Check if the insert was successful
if ($result) {
  echo "Data added successfully.";
} else {
  die("Database query failed. " . mysqli_error($connection));
}

// Step 5: Close the database connection
mysqli_close($connection);
?>
