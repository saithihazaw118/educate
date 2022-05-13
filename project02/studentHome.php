<?php
    session_start();
    require('Server/connection.php');
    $dbname = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>
  <!-- site icon -->
  <link rel="icon" href="img/logo.png">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">
  <style>
      body{
          background-color: #f7941d;
      }
      h1{
          font-size: 40px;
          color: white;
      }
      span{
        font-size: 35px;

        color: white;
        margin-bottom: 1px solid black;
        display: block;
      }
  </style>
  <!-- js -->
  <script src="https://kit.fontawesome.com/352c72ca99.js" crossorigin="anonymous"></script>
  <script defer src="javascript/script.js"></script>
</head>

<body>
    
   <div class="container text-center">
   <h1>Welcome to Educare!</h1>
    <span> <?php echo $dbname ?></span>
    <a href="Server/Logout.php" class="btn btn-danger">Logout</a>
   </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>