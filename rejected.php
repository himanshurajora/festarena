<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fest Arena - Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
  <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary" style="background-color:rgb(40, 40, 40)">
    <?php
    session_start();
    include("conn.php");
    if (!isset($_SESSION['username'])) {
        header("location:./index.php");
    }
    ?>
    
    <div class="container text-white text-center">
        <h1>Oops!! Your Application Has Been Rejected</h1>
        <h3>Our Team Found You As Spam! Contact: admin@festarena.online</h3>
        <a class="nav-link text-warning" href="index.php">Go To Home Page</a>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>