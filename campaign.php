<?php 
session_start(); 
include('include/header_s.php'); 
include('config.php');
?>
<style>
.media-object{
    max-height: 150px;
    max-width: 150px;
}
.templatemo_homebutton {
    margin: 15px auto 20px auto;
}
</style>
<div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="templatemo_headerimage">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="images/slider/1.jpg" alt="Slide 1"></li>
        <li><img src="images/slider/2.jpg" alt="Slide 2"></li>
        <li><img src="images/slider/3.jpg" alt="Slide 3"></li>
      </ul>
    </div>
  </div>
  <?php 
  $camp_photo = "";
    $idd = $_GET['id'];
      $query = "SELECT * FROM `tb_camp` WHERE camp_id = $idd";
      $result = mysqli_query($con, $query);
      while($row = $result->fetch_assoc()){
        $camp_photo = $row['camp_photo'];
      ?>
  <div class="slider-caption">
    <div class="templatemo_homewrapper"> 
      <div class="templatemo_hometitle"><?php echo $row['camp_name']; ?></div>         
      <div class="templatemo_hometext"><?php echo $row['camp_desc']; ?></div>
      <div class="templatemo_homebutton">
      <?php 
      $us_id = $_SESSION['user_id'];
      $queryy = "SELECT * FROM `tb_follower` WHERE `follow_camp_id` = $idd AND `follow_user_id` = $us_id";
      $check = mysqli_query($con, $queryy);
      if(mysqli_num_rows($check) < 1) {  
        ?>
      
      <a href="follow.php?id=<?php echo $row['camp_id']; ?>">FOLLOW</a>
      <?php } else { ?>
      <a href="unfollow.php?id=<?php echo $row['camp_id']; ?>">UNFOLLOW</a>
      <?php } ?></div>
   
      </div>
  </div>
  <?php } ?> 
  <div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
  <div class="row"><div class="col-md-10"> <?php 
        
        $querys = "SELECT * FROM `tb_post` WHERE `post_camp` = $idd"; 
        $results = mysqli_query($con,$querys);
        if(mysqli_num_rows($results) < 1)
        { ?>
            <h3 style="color:red;"> No Posts Here Yet ! Write a first post to get the campaign running !</h3>
        <? } ?></div><div class="templatemo_homebutton col-md-2"><a href="new_post.php?id=<?php echo $idd; ?>">Write a Post</a></div></div>
 
     <?
        while($rows = $results->fetch_assoc()) {
    ?>
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object" src="uploads/<?php echo $camp_photo; ?>">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading"><?php echo $rows['post_title']; ?></h4>
          <p class="text-right"><b>
          <?php 
                $user_d = $rows['post_by'];
                $querys = "SELECT * FROM `tb_register` WHERE id = $user_d"; 
                $resulted = mysqli_query($con,$querys);
                while($raws = $resulted->fetch_array()) { 
                    echo "By : "; echo $raws['first_name'];  echo $raws['last_name']; 
                }
                ?>
          </b></p>
          <p><?php echo $rows['post_desc']; ?></p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo $rows['post_date']; ?> </span></li>
            <li>|</li>
            <li>
               <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
       </div>
        </div>
  </div>
  <?php } ?>

  </div>
<?php include('include/footer.php'); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
