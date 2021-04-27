<?php 
session_start(); 
include('include/header_s.php'); 
include('config.php');
?>
<style>
.signup-form h2:before, .signup-form h2:after {
    width: 20% !important;
}
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
    color: #f57504;
    text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
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
    $idd = $_GET["id"];
    
      $query = "SELECT * FROM `tb_camp` WHERE camp_id = $idd";
      $result = mysqli_query($con, $query);
      while($row = $result->fetch_assoc()){
      ?>
  <div class="slider-caption">
    <div class="templatemo_homewrapper"> 
      <div class="templatemo_hometitle"><?php echo $row['camp_name']; ?></div>         
      <div class="templatemo_hometext"><?php echo $row['camp_desc']; ?></div>
      <div class="templatemo_homebutton"><?php if($_SESSION['logged_in'] == TRUE) {  ?><a href="follow.php">FOLLOW</a><?php } else { ?><a href="register.php">Register Now</a><?php } ?></div>
   
      </div>
  </div>
  <?php } ?> 
  <div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
  <div class="row"><div class="col-md-10"></div><div class="templatemo_homebutton col-md-2"><a href="new_post.php">Write a Post</a></div></div>
  <div class="row">
    <div class="signup-form">
    <form name="register" action="setup.php" method="POST" enctype="multipart/form-data">
		<h2>Write a POST</h2>

		<p class="hint-text">Provide your ideas and the ways you choose to support this cause!</p>
        
        <div class="form-group">
        	<input type="text" class="form-control" name="post_title" placeholder="Post TITLE" required="required">
            <input type="hidden" name="camp_id" value="<?php echo $idd; ?>" required>
        </div>
        <div class="form-group">
        	<textarea type="" rows="5" class="form-control" name="post_desc" placeholder="Explain your ideas in here!" required="required"></textarea>
        </div>
		
		<div class="form-group">
            <button type="submit" name="new_post" class="btn btn-success btn-lg btn-block">Submit NOW</button>
        </div>
    </form>
</div>
    </div>
    </div>
  </div>
 
<?php include('include/footer.php'); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
