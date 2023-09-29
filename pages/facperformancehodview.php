<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query the classtaken table to retrieve data
$sql = "SELECT * FROM classtaken";
$result = $conn->query($sql);

// Display the data in the table
if ($result->num_rows > 0) {
  echo '<div class="container">';
  echo '<div class="card">';
  echo '<h5 class="card-header">Faculty Classes Taken</h5>';
  echo '<div class="card-body">';
  echo '<table class="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th scope="col">Name</th>';
  echo '<th scope="col">Number of Classes</th>';
  echo '<th scope="col">Subject Code</th>';
  echo '<th scope="col">Subject Name</th>';
  echo '<th scope="col">Class Date</th>';
  echo '<th scope="col">About Topic</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['num_classes'] . '</td>';
    echo '<td>' . $row['subject_code'] . '</td>';
    echo '<td>' . $row['subject_name'] . '</td>';
    echo '<td>' . $row['class_date'] . '</td>';
    echo '<td>' . $row['about_topic'] . '</td>';
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

// Step 2: Retrieve data from the faculty_leaves table
$query = "SELECT * FROM faculty_leaves";
$result = mysqli_query($connection, $query);


if ($result->num_rows > 0) {
  echo '<div class="container">';
  echo '<div class="card">';
  echo '<h5 class="card-header">Faculty leaves Taken</h5>';
  echo '<div class="card-body">';
  echo '<table class="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th scope="col">Faculty name</th>';
  echo '<th scope="col">Leave date</th>';
  echo '<th scope="col">Leaves alloted</th>';
  echo '<th scope="col">Leaves taken</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['faculty_name'] . "</td>";
  echo "<td>" . $row['leave_date'] . "</td>";
  echo "<td>" . $row['leaves_allotted'] . "</td>";
  echo "<td>" . $row['leaves_taken'] . "</td>";
  echo "</tr>";
}
echo "</table>";
}

// Step 4: Free up memory and close the database connection
mysqli_free_result($result);
mysqli_close($connection);
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
                    <li><a class="dropdown-item" href="Journals">Journals</a></li>
                    <li><a class="dropdown-item" href="Conferences">Conferences</a></li>
                    <li><a class="dropdown-item" href="Book chapters">Book chapters</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="facissuehodview.php">View Issues Faced Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./facissuehodview.php">View Faculty Performace</a>
              
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
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facpor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement to retrieve data from the passpercentage table
$sql = "SELECT * FROM passpercentage";

// Execute the SQL statement and store the result
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<div class="card">';
    echo '<h5 class="card-header">Pass percentage</h5>';
    echo '<div class="card-body">';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Faculty name</th>';
    echo '<th scope="col">Subject code</th>';
    echo '<th scope="col">pass percentage</th>';
    echo '<th scope="col">passed students</th>';
    echo '<th scope="col">Total students</th>';
    echo '<th scope="col">semester</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["facultyName"] . "</td>";
        echo "<td>" . $row["subjectCode"] . "</td>";
        echo "<td>" . $row["passPercentage"] . "</td>";
        echo "<td>" . $row["numPassed"] . "</td>";
        echo "<td>" . $row["numTotal"] . "</td>";
        echo "<td>" . $row["semester"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found in the passpercentage table.";
}

// Close the database connection
mysqli_close($conn);
?>
