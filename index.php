<?php 
session_start(); 

include('include/header.php'); 
include('config.php');
?>
<style>
  .c-class{
    max-width: 360px;
    max-height: 238px;
  }
</style>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="templatemo_headerimage">
    <div class="flexslider">
      <ul class="slides">
        <li><img class="slide-img" src="images/bb1.jpeg" alt="Slide 2"></li>
        <li><img class="slide-img" src="images/bb2.jpeg" alt="Slide 2"></li>
      </ul>
    </div>
  </div>
  <div class="slider-caption"  style="margin-top:100px !important">
    <div class="templatemo_homewrapper">
      <div class="templatemo_hometitle"><?php if($_SESSION['logged_in'] == TRUE) {  ?> Welcome <?php echo $_SESSION['user_name']; } else { echo "STAND WITH HUMANITY"; } ?></div>
      <div class="templatemo_hometext">SPEAK UP for Those Who CANNOT Speak For Themselves</div>
      <div class="templatemo_homebutton"><?php if($_SESSION['logged_in'] == TRUE) {  ?><a href="logout.php">Logout</a><?php } else { ?><a href="register.php">Register Now</a><?php } ?></div>
    </div>
  </div>
</div>
<!-- header end -->
<div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
    <div class="row">
      <h1>WHAT YOU CAN DO TO MAKE A DIFFERENCE</h1>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col">
          <div class="templatemo_serviceicon"><span class="fa fa-pencil-square-o"></span></div>
          <div class="templatemo_service_title">Start a Campaign</div>
          <p>Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col">
          <div class="templatemo_serviceicon"><span class="fa fa-home"></span></div>
          <div class="templatemo_service_title">Support a Campaign</div>
          <p>Conquer is free HTML5 template by <span class="blue">template</span><span class="green">mo</span>. Feel free to download, edit and use this template for any purpose.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col">
          <div class="templatemo_serviceicon"><span class="fa fa-download"></span></div>
          <div class="templatemo_service_title">Provide Motivation </div>
          <p>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images used in this template. Curabitur rhoncus felis quis nibh pulvinar.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox">
          <div class="templatemo_serviceicon"><span class="fa fa-random"></span></div>
          <div class="templatemo_service_title">Do Social Work</div>
          <p>Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- service end -->
<div class="clear"></div>
<!-- work start -->
<div class="templatemo_workwrapper" id="templatemo_work_page">
  <div class="container">
    <div class="row">
      <h1>Current Campaigns</h1>
      <div class="col-md-12 templatemo_workmargin">Support the Current Social Campaigns by Following them !</div>
    </div>
  </div>
  <div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c1.jpeg" alt="work 1">
        <div class="overlay">
          <div class="templatemo_worktitle">Black Lives Matter</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c4.jpeg" alt="work 2">
        <div class="overlay">
          <div class="templatemo_worktitle">Show Humanity</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="images/c4.jpeg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c5.jpeg" alt="work 3">
        <div class="overlay">
          <div class="templatemo_worktitle">Stop Hunger</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="images/c5.jpeg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c6.jpeg" alt="work 4">
        <div class="overlay">
          <div class="templatemo_worktitle">Help Homeless</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="images/c6.jpeg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c7.jpeg" alt="work 5">
        <div class="overlay">
          <div class="templatemo_worktitle">Free Food</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="images/c7.jpeg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c8.jpeg" alt="work 6">
        <div class="overlay">
          <div class="templatemo_worktitle">Women Power</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="images/c8.jpeg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c9.jpeg" alt="work 7">
        <div class="overlay">
          <div class="templatemo_worktitle">Helping Hands</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="images/c9.jpeg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img class="c-class" src="images/c10.jpeg" alt="work 8">
        <div class="overlay">
          <div class="templatemo_worktitle">Stop the Spread</div>
          <div class="templatemo_workdes">Morbi et nisi in augue accumsan imperdiet</div>
          <div class="templatemo_worklink"><a href="images/c10.jpeg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
 <?php include('include/footer.php'); ?>