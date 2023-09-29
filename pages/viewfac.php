<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Portal System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Faculty Portal System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./add_faculty.html">Add Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">View Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">View Certifications</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    View Faculty Attended Events
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Workshops</a></li>
                    <li><a class="dropdown-item" href="#">FDP's</a></li>
                    <li><a class="dropdown-item" href="#">SNP's</a></li>
                    <li><a class="dropdown-item" href="#">Semenars</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">View Issues Faced Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">View Faculty Performace</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

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
</body>
</html>
