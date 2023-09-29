<?php
?>

//id=admin,password=1234
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Portal System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Faculty Portal System</a>
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
                  <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./gallery.html">Gallery</a>
</li>
<li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./login2.php">Login</a>
            </div>
          </div>
        </div>
      </nav>
<div class="container d-flex justify-content-around">
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">HOD Login Form</div>
    </div>
    <div class="form-container">
      <div class="form-inner">
        <form action="#" class="login" onsubmit="checkCredentials(event)">
          <div class="field">
            <input type="text" placeholder="Email Address" id="email" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" id="password" required>
          </div>
          <div class="pass-link">
            <a href="#">Forgot password?</a>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">
            Not a member? <a href="">Signup now</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
              function checkCredentials(event) {
                event.preventDefault();
                const email = document.querySelector('input[type="text"]').value;
                const password = document.querySelector('input[type="password"]').value;
                if (email === 'admin' && password === '1234') {
                  window.location.href = 'pages/hod_dashboard.php';
                } else {
                  alert('Incorrect credentials');
                }
              }
            </script>
            
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
          
          <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Portal System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
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
                  <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../gallery.html">Gallary</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./hod_login.html">HOD Login</a></li>
                    <li><a class="dropdown-item" href="./faculty_login.html">Faculty Login</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Faculty Login Form</div>
    </div>
    <div class="form-container">
      <div class="form-inner">
        <form action="./pages/login.php" class="login" method="post">
          <div class="field">
            <input type="text" placeholder="Email Address" required type="email" id="email" name="email" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required type="password" id="password" name="password" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

      
</div>
      <div id="error-message" style="display: none; color: red;">Incorrect email or password.</div>
	<script>
		// Get the error message element
		var errorMessage = document.getElementById("error-message");

		// Check if the URL has a login error parameter
		var params = new URLSearchParams(window.location.search);
		if (params.get("login_error") === "true") {
			// Show the error message if the parameter is set
			errorMessage.style.display = "block";
		}
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
