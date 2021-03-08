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
    if (isset($_SESSION['username'])) {
        header("location:index.php");
    }
    ?>
    
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body bg-dark p-0">
                        <div class="row">
                        
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image text-center"><i class="fas fa-hotel text-warning" style="font-size:250px; margin-top:40px;"></i></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    
                                    <form class="user" method="post">
                                        <div class="form-group"><input  class=" bg-dark text-light form-control form-control-user" type="text" placeholder="Enter Username" name="username"></div>
                                        <div class="form-group"><input class=" bg-dark text-light form-control form-control-user" type="password" placeholder="Enter Password" name="password"></div>
                                        <div class="form-group">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div> -->
                                        </div><input class="btn btn-warning text-dark btn-block text-white btn-user" type="submit" name="login" value="Login">
                                        <hr>
                                        <p class="lead text-danger"><?php

                                            if (isset($_POST['login'])) {
                                                $username = $_POST['username'];
                                                $password = $_POST['password'];
                                                if ($username != "" && $password != "") {
                                                    $q = "SELECT username, password from members where username = '" . $username . "' and password = '" . $password . "'";
                                                    if (mysqli_num_rows(mysqli_query($conn, $q)) > 0) {
                                                        $_SESSION['username'] = $username;
                                                        header('location:./index.php');
                                                    } else {
                                                        echo "Wrong Id or Password";
                                                    }
                                                }
                                            }
                                            ?>
                                            </p>
                                    </form>
                                    <div class="text-center"><a class="small text-warning" href="register.php">Apply For Membership!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>