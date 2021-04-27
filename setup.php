<?php
session_start();
ob_start();
include('config.php');

/*********  REGISTER CODE STARTS HERE  ***********/

if(isset($_POST['register']))
{
    $user_firstname = $_POST['first_name'];
    $user_lastname = $_POST['last_name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_bio = $_POST['bio'];
    $user_password = $_POST['password'];
    if ($mysqli -> connect_errno){
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    else{
        $query = "SELECT * FROM `tb_register` WHERE `email` = '$user_email'";
        $res = mysqli_query($con,$query);
        //echo $query;
        if ($res->num_rows > 0) {

            header('Location:register.php?error=registered');

        }
        else
        {
        
            $query = "INSERT INTO `tb_register` (`first_name`,`last_name`,`email`,`phone`,`bio`,`password`) VALUES ('$user_firstname','$user_lastname','$user_email','$user_phone','$user_bio','$user_password')";
            $rows = mysqli_query($con,$query); 
            //echo $rows.' '.$query;
            header('Location:login.php?msg=registered');
        }

    }
}

/*********  LOGIN CODE STARTS HERE  ***********/

if(isset($_POST['login']))
{
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    if ($mysqli -> connect_errno){
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    else{
        $query = "SELECT * FROM `tb_register` WHERE `email` = '$user_email' AND `password` = '$user_password' AND `status` = '1'";
        $res = mysqli_query($con,$query);
        echo $query;
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                echo $row['id'];
                echo $row['first_name'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['first_name'];
                $_SESSION['logged_in'] = TRUE;
                $_SESSION['user_email'] = $row['email'];

                header('Location:index.php');
            }
        }
        else{
            header('Location:login.php?val=invalid');
        }
        
    }
   
}

/*************** NEW CAMPAIGN CODE **************** */

// Check if image file is a actual image or fake image
if(isset($_POST["new_camp"])) {
    $camp_name = $_POST['name'];
    $camp_desc = $_POST['desc'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];    
        $folder = "uploads/".$filename;

        $status = 'inactive';
        $user_id = $_SESSION['user_id'];
        $date_now = date('yyyy-mm-dd');

        $query = "INSERT INTO `tb_camp` (`camp_name`,`camp_desc`,`camp_photo`,`camp_status`,`camp_by`,`camp_date`) VALUES ('$camp_name','$camp_desc','$filename','$status','$user_id','$date_now')";
        $rows = mysqli_query($con,$query); 

        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
      header('Location:campaign_list.php?val=added');
}

// New POST into a Campaign

if(isset($_POST["new_post"]))
{
    $post_title = $_POST['post_title'];
    $post_desc = $_POST['post_desc'];
    $post_camp = $_POST['camp_id'];
    $post_by = $_SESSION['user_id'];
    $post_date = date('y-m-d');

    $query = "INSERT INTO `tb_post` (`post_title`,`post_desc`,`post_camp`,`post_by`,`post_date`) VALUES ('$post_title','$post_desc','$post_camp','$post_by','$post_date')";
   $res = mysqli_query($con,$query);

    //echo $query;
    header('Location:campaign.php?id='.$post_camp);

}


?>