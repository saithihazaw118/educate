<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Educare</title>
  <!-- site icon -->
  <link rel="icon" href="img/logo.png">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- js -->
  <script src="https://kit.fontawesome.com/352c72ca99.js" crossorigin="anonymous"></script>
  <script defer src="javascript/script.js"></script>
</head>

<body>

  <header>

    <!-- navbar section start -->

    <div class="navbar">
      <div class="navbar_left_side">
        <div class="logo"><img src="./img/logo.png" alt="" width="70"></div>
        <ul class="nav_menu">
          <li><a href="index.html"><span>Home</span></a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="activities.php">Activities</a></li>
          <li><a href="#">
              <div class="dropdown">
                <a class="btn dropdown-toggle-split" href="#" role="button" id="dropdownMenuLink"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Courses <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                  <li><a class="dropdown-item" href="primary.php">Primary</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="secondary.php">Secondary</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="summer.php">Summer</a></li>

                </ul>
              </div>
            </a></li>
          <!-- <li><a href="courses.html">Courses</a></li> -->
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="navbar_right_side">
        <div class="login-register-link">
          <!-- Login Modal -->
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#LoginModal">
            Login
          </button>
          <!-- Register Modal -->
          <button type="button" data-bs-toggle="modal" data-bs-target="#myModal">
            Register
          </button>
        </div>
      </div>

      <i class="fa fa-bars" id="bars"></i>

    </div>

    <!-- navbar section end -->