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
    if (isset($_SESSION['admin'])) {
        header("location:index.php");
    }

    ?>

    <div class="container ">
        <div class=" text-light table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead  class="text-light">
                    <tr>
                        <th>Username</th>
                        <th>College Name</th>
                        <th>Contact</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="text-light">
                    <?php
                    $cl = "members";
                    $q = "SELECT username, college, phone, email, status FROM " . $cl;
                    $qq = mysqli_query($conn, $q);
                    //         <td>Computer Science</td>
                    // <td>Dr. Sunil Kumar Jangid</td>
                    // <td><a href="#" class="btn btn-success btn-sm">Edit</a></td>
                    if (mysqli_num_rows($qq) > 0) {
                        while ($row = mysqli_fetch_assoc($qq)) {
                            if ($row['status'] == "N") {
                                echo "<tr>
                                                    <td>" . $row['username'] . "</td>
                                                    <td>" . $row['college'] . "</td>
                                                    <td>" . $row['phone'] . ", ".$row['email']."</td>
                                                    <td><a href='./accept.php?username=".$row['username']."' class='text-light btn btn-sm btn-success'>Accept</a></td>
                                                    <td> <a href='./reject.php?username=".$row['username']."' class='text-light btn btn-sm btn-danger'>Reject</a></td>";
                            }
                        }
                    }


                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>