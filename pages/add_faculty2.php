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

// Escape user inputs for security
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$designation = mysqli_real_escape_string($conn, $_REQUEST['designation']);
$doj = mysqli_real_escape_string($conn, $_REQUEST['doj']);
$mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$experience = mysqli_real_escape_string($conn, $_REQUEST['experience']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// Attempt to insert data into faculty table
$sql = "INSERT INTO faculty (id, name, designation, doj, mobile, email, address, experience, password) VALUES ('$id', '$name', '$designation', '$doj', '$mobile', '$email', '$address', '$experience', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: add_faculty.html");
    exit();
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close database connection
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
                  <a class="nav-link active" aria-current="page" href="hod_dashboard.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="add_faculty.html">Add Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="faculty_details2.php">View Faculty</a>
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

      <div class="container container-margin">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="card">
          <h5 class="card-header">Add Faculty</h5>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="name" class="form-label">Faculty Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <select class="form-select" id="designation" name="designation">
                      <option value="Professor">Professor</option>
                      <option value="Associate">Associate</option>
                      <option value="Assistant">Assistant</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="doj" class="form-label">Date Of Join</label>
                    <input type="date" class="form-control" id="doj" name="doj" value="">
                  </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="" aria-describedby="emailHelp">
                  </div>
                </div>
              </div>
  
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="">
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="experience" class="form-label">Experience</label>
                    <input type="text" class="form-control" id="experience" name="experience" value="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
                  </div>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
              </div>
              
              </div>
              
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
              </body>
              </html>
              