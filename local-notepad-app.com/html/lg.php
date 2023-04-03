<?php
class admin
{
    function onlyadmin()
    {
        session_start();
        if (isset($_POST['username']) || isset($_POST['password'])) {
            if ($_POST['username'] == "Nikhil" && $_POST['password'] == "Nikhil@123") {
                $uname = $_POST['username'];
                $pass = $_POST['password'];
                $_SESSION['uname'] = $uname;
                $_SESSION['pass'] = $pass;
                echo "<script> location.href='addinventory.php' </script>";
            }
        }
        if (isset($_SESSION['uname']) && isset($_SESSION['pass'])) {
            echo "<script> location.href='addinventory.php' </script>";
        }
    }
    function logoout()
    {

        session_start();
        if (!isset($_SESSION['uname']) && !isset($_SESSION['pass'])) {
            echo "<script> location.href='login.php' </script>";
        }

        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            echo "<script> location.href='login.php' </script>";
        }
    }
}
