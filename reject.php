<?php
    session_start();
    include("conn.php");
    if(!isset($_SESSION['admin'])){
        if(isset($_GET['username'])){
            $username = $_GET['username'];
            $q = "UPDATE `members` SET `status` = 'R' WHERE `username` = '".$username."'";
            if(mysqli_query($conn, $q)){
                header("location:./acceptinvite.php");
            }
        }
        else{
            header("location:./index.php");
        }
    }

?>