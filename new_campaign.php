<?php 
session_start();
include('config.php');
include('include/header_s.php'); 
?>
<style>

.flexslider {
    max-height: 250px;
}
</style>
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
  <div class="slider-caption">
    <div class="templatemo_homewrapper">
      <div class="templatemo_hometitle"></div>
    </div>
  </div>
  <div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
  <h5 style="color:red"><b><?php if(isset($_GET["error"]) == "registered") { echo "Account already exists for this Email Address!"; } ?></b></h5>

    <div class="row">
    <div class="signup-form">
    <form name="register" action="setup.php" method="POST" enctype="multipart/form-data">
		<h2>New Campaign</h2>

		<p class="hint-text">Support a Cause by providing it the recognition of the world.</p>
        
        <div class="form-group">
        	<input type="text" class="form-control" name="name" placeholder="Campaign Title" required="required">
        </div>
        <div class="form-group">
        	<textarea rows="5" class="form-control" name="desc" placeholder="Describe the cause in few words!" required="required"></textarea>
        </div>
        <div class="form-group">
        	<input type="file" name="photo" value="" required="required">
        </div>
		
		<div class="form-group">
            <button type="submit" name="new_camp" class="btn btn-success btn-lg btn-block">Submit NOW</button>
        </div>
    </form>
</div>
    </div>
  </div>
</div>
<!-- service end -->
<div class="clear"></div>

<?php include('include/footer.php'); ?>


