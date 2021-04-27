<?php 
session_start();
ob_start();
include('config.php');

$camp_id = $_GET["id"];
$user_id = $_SESSION['user_id'];
$date = date('y-m-d');
$query = "INSERT INTO `tb_follower` (`follow_camp_id`,`follow_user_id`,`follow_date`) VALUES ('$camp_id','$user_id','$date')";
$res = mysqli_query($con,$query);

header('Location:campaign.php?id='.$camp_id);

?>