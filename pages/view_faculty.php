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

        // Define the selected columns from the faculty table
        $columns = "id, name, designation, email, mobile, experience";

        // Retrieve data from faculty table with the selected columns
        $sql = "SELECT $columns FROM faculty";
        $result = mysqli_query($conn, $sql);

        // Check if there are any rows in the result set
        if (mysqli_num_rows($result) > 0) {
            // Display the data in a table
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Designation</th><th>Email</th><th>Phone</th><th>Experience</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['designation']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['experience']."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No data found.";
        }

        // Close database connection
        mysqli_close($conn);
    ?>