<?php 
session_start(); 

include('include/header_s.php'); 
include('config.php');
?>
<style>

.flexslider {
    max-height: 250px;
}
.img-class {
    height: 275px !important;
    width: 350px;
}
p {
    margin: 0 0 0px !important;
}
.col-md-4 {
        margin-top: 25px;
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
  <div class="slider-caption">
    <div class="templatemo_homewrapper">
      <div class="templatemo_hometitle"></div>
    </div>
  </div>
  <div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
  <div class="row blog-row">
	    <h1 class="text-center margin_bottom30">Latest Campaigns</h1>
        <?php 
            $query = "SELECT * FROM `tb_camp` WHERE `camp_status` = 'active'"; 
            $result = mysqli_query($con,$query);
            while($row = $result->fetch_assoc()) {
        ?>
			<div class="col-md-4 col-sm-4 col-xs-12 margin_bottom30">
			<a href="campaign.php?id=<?php echo $row['camp_id']; ?>">
				<img class="img-responsive img-class center-block" src="uploads/<?php echo $row['camp_photo']; ?>" height="250">
				</a>
				<div class="blog-content bg-white">
				<h3><?php echo $row['camp_name']; ?></h3>
				<p>Category : <a href="">Social</a></p>
				<p> <?php 
                $first10words = implode(' ', array_slice(str_word_count($row['camp_desc'],1), 0, 15));
                echo $first10words; ?>
                <a href=""  class="heading_color">  Continue Reading</a></p>
				<hr>
				<p>
				<span class="pull-right">By : <strong><?php 
                $user_d = $row['camp_by'];
                $querys = "SELECT * FROM `tb_register` WHERE id = $user_d"; 
                $results = mysqli_query($con,$querys);
                while($rows = $results->fetch_array()) { 
                    echo $rows['first_name'];  echo $rows['last_name']; 
                }
                ?></strong></span> </p>
				</div>
			</div>
        <?php } ?>
		</div>

  </div>
<?php include('include/footer.php'); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://use.fontawesome.com/1dec14be15.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>