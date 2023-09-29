<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM assigned_work";
$result = $conn->query($sql);

// Display the data in the table
if ($result->num_rows > 0) {
  echo '<div class="container">';
  echo '<div class="card">';
  echo '<h5 class="card-header">Assigned Work</h5>';
  echo '<div class="card-body">';
  echo '<table class="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th scope="col">Faculty Name</th>';
  echo '<th scope="col">Lab Code</th>';
  echo '<th scope="col">Lab Name</th>';
  echo '<th scope="col">Work Type</th>';
  echo '<th scope="col">Work Description</th>';
  echo '<th scope="col">Assigned Date</th>';
  echo '<th scope="col">Due Date</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['faculty_name'] . '</td>';
    echo '<td>' . $row['lab_code'] . '</td>';
    echo '<td>' . $row['lab_name'] . '</td>';
    echo '<td>' . $row['work_type'] . '</td>';
    echo '<td>' . $row['work_description'] . '</td>';
    echo '<td>' . $row['assigned_date'] . '</td>';
    echo '<td>' . $row['due_date'] . '</td>';
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

// Close database connection
$conn->close();
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
              </tbody>
            </table>
          </div>
        </div>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<?php
// Start a session to get the logged in user's email
session_start();
$email = $_SESSION['email'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the studeal table
$sql = "SELECT * FROM studeal";
$result = $conn->query($sql);

// Display the data in the table
if ($result->num_rows > 0) {
  echo '<div class="container">';
  echo '<div class="card">';
  echo '<h5 class="card-header">Student Dealing Details</h5>';
  echo '<div class="card-body">';
  echo '<table class="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th scope="col">Name</th>';
  echo '<th scope="col">Subject Code</th>';
  echo '<th scope="col">Subject Name</th>';
  echo '<th scope="col">Dealing Type</th>';
  echo '<th scope="col">Dealing Reason</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['subject_code'] . '</td>';
    echo '<td>' . $row['subject_name'] . '</td>';
    echo '<td>' . $row['dealing_type'] . '</td>';
    echo '<td>' . $row['dealing_reason'] . '</td>';
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

// Close database connection
$conn->close();
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

      <?php
      // Replace with your database credentials
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

// Select data from the database
$sql = "SELECT * FROM counseling_info";
$result = mysqli_query($conn, $sql);

// Display the data in a table
if ($result->num_rows > 0) {
  echo '<div class="container">';
  echo '<div class="card">';
  echo '<h5 class="card-header">Counseling Information</h5>';
  echo '<div class="card-body">';
  echo '<table class="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th scope="col">Faculty Name</th>';
  echo '<th scope="col">Date</th>';
  echo '<th scope="col">Student Name</th>';
  echo '<th scope="col">Course Code</th>';
  echo '<th scope="col">Counseling Summary</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['faculty_name'] . '</td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['student_name'] . '</td>';
    echo '<td>' . $row['course_code'] . '</td>';
    echo '<td>' . $row['counseling_summary'] . '</td>';
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

// Close connection
mysqli_close($conn);
?>