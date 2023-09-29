<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query the database to retrieve data
$sql = "SELECT * FROM workshops";
$result = mysqli_query($conn, $sql);

// Display the data in the table
if (mysqli_num_rows($result) > 0) {
  echo '<div class="container">';
  echo '<div class="card">';
  echo '<h5 class="card-header">Workshops</h5>';
  echo '<div class="card-body">';
  echo '<table class="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th scope="col">Name</th>';
  echo '<th scope="col">Workshop</th>';
  echo '<th scope="col">Location</th>';
  echo '<th scope="col">Date</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['workshop'] . '</td>';
    echo '<td>' . $row['location'] . '</td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '</tr>';
  }
  echo '</tbody>';
  echo '</table>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
} else {
  echo "No data found.";
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
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
                  <a class="nav-link" href="./faculty_details2.php">View Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="certificatehodview.php">View Certifications</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    View Faculty Attended Events
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="workshophodview.php">Workshops</a></li>
                    <li><a class="dropdown-item" href="fdpshodview.php">FDP's</a></li>
                    <li><a class="dropdown-item" href="webinarhodview.php">Webinars</a></li>
                    <li><a class="dropdown-item" href="seminarhodview.php">Seminars</a></li>
                  </ul>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    View Faculty Publications
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./journalhodview.php">Journals</a></li>
                    <li><a class="dropdown-item" href="./conferencehodview.php">Conferences</a></li>
                    <li><a class="dropdown-item" href="./bookchaphodview.php">Book chapters</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="facissuehodview.php">View Issues Faced Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="abouthodview.php">About faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./facperformancehodview.php">View Faculty Performace</a>
              
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./hod_dashboard.php">List of monthly Reports</a>
              
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
