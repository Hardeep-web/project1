<?php 
session_start();
ob_start();
include('config.php');
$camp_id = $_GET["id"];
$sql = "UPDATE `tb_camp` SET `camp_status` = 'active' WHERE `camp_id` = $camp_id ";
$res = mysqli_query($con,$sql);

header('Location:campaigns.php');

?>