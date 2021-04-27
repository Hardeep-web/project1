<?php
//echo 'SESSION ='.$_SESSION['loggedin'];
if($_SESSION['logged_in'] == TRUE)
{
    //echo $message = 'you must log in to see this page.';
    header('Location:index.php');
}
     //REST OF THE CODE
    
?>
<style>

.flexslider {
    max-height: 250px;
}
</style>
<style>
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
	color: #f5430c !important;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #fff;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
<?php include('include/header.php'); ?>
<div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="templatemo_headerimage">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="images/b11.jpeg" alt="Slide 1"></li>
        
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
      <h5 style="color:green"><b><?php if(isset($_GET["log"]) == "logout") { echo "You are signed out! Please Login below to continue"; } else if(isset($_GET["msg"]) == "registered") { echo "Congratuations! You have registered successfuly. Please Login"; } ?></b></h5>
    <div class="row">
    <div class="signup-form">
    <form action="setup.php" method="post">
		<h2>Login</h2>
		<p class="hint-text">Sign in to your Account!</p>
       
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="login">Sign In</button>
        </div>
    </form>
	<div class="text-center">Do not have an account? <a href="register.php">Register Now</a></div>
</div>
    </div>
  </div>
</div>
<!-- service end -->
<div class="clear"></div>

<?php 
include('include/footer.php');
if($_GET['val'] == "invalid")  { ?> 
<script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });
</script>
<?php } ?>


<!-- Message Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>