<?php
session_start();
ob_start();
include('config.php');

if(isset($_POST['admin_login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin_login` WHERE `username` = '$username' AND `password` = '$password'";
    $check = mysqli_query($con,$query);
    while($row = $check->fetch_assoc())
    {
        if(mysqli_num_rows($check) > 0)
        {
            //echo mysqli_num_rows($check);
            $_SESSION['username'] = $username;
            header('Location:index.php');
        }
        else
        {
            header('Location:login.php?msg=invalid');
        }
    }

  
}

?>