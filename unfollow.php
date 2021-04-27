<?php 
session_start();
ob_start();
include('config.php');

$camp_id = $_GET["id"];
$user_id = $_SESSION['user_id'];
$date = date('y-m-d');
$query = "DELETE FROM `tb_follower` WHERE `follow_camp_id` = $camp_id AND `follow_user_id` = $user_id";
$res = mysqli_query($con,$query);

header('Location:campaign.php?id='.$camp_id);

?>