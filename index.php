<?php require('common/header.php');?>
<!-- Video background -->
<div class="embed-responsive embed-responsive-16by9 video-background">
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="Asset/images/video/ParadiseChaserVideo.mp4" type="video/mp4">
    </video>
    <!-- Video Footer Text -->
    <div class="video-foot">
      <h1 class="text-center paradise-Packages">
        Our Packages
      </h1>
      <br>
      <img src="<?= $border; ?>" class="img-border"/>
      <h3 class="subtext">Find your ideal paradise packages</h3>
      <h5 class="subtext">Our Most Booked Packages</h5>
      <h6 class="subtext">Your Dream Holidays</h6>
    </div>
  </div>
  <!-- End of Video Background -->

  <!-- Inner Container -->
  <div class="container">
    <div class="row">
      <!-- Card 1 -->
      <div class="card card-Packages col-md-4">
        <div class="hovereffect">
          <img class="card-img-top img-responsive" src="Asset/images/travel-packages/dk.jpg" alt="Card image cap">
          <div class="overlay">
            <h2 class="package-title">Travel Package - Dubai & Kuala Lumpur (December 2018)</h2>
            <a class="info" href="#">View Details</a>
          </div>
          <div class="card-body">
            <p class="card-text text-left">Visit Dubai and Kuala Lumpur, Air Ticket included 3 week packages</p>
            <p class="card-text text-left">Travel Date 16 December 2018 - 03 January 2019</p>
            <p class="card-text text-left">Package Price: Rs. 63,000</p>
          </div>
        </div>
      </div>
      <div class="card card-Packages col-md-4">
        <div class="hovereffect">
          <img class="card-img-top img-responsive" src="Asset/images/hotels/villaC.jpg" alt="Card image cap">
          <div class="overlay">
            <h2 class="package-title">Hotel Package - Villa Caroline </h2>
            <a class="info" href="#">View Details</a>
          </div>
          <div class="card-body">
            <p class="card-text text-left">Visit Dubai and Kuala Lumpur, Air Ticket included 3 week packages</p>
            <p class="card-text text-left">Travel Date 16 December 2018 - 03 January 2019</p>
            <p class="card-text text-left">Package Price: Rs. 63,000</p>
          </div>
        </div>
      </div>  <div class="card card-Packages col-md-4">
        <div class="hovereffect">
          <img class="card-img-top img-responsive" src="Asset/images/activities/7cascade.jpg" alt="Card image cap">
          <div class="overlay">
            <h2 class="package-title">Activity Package - 7 Cascade Lodge</h2>
            <a class="info" href="#">View Details</a>
          </div>
          <div class="card-body">
            <p class="card-text text-left">Visit Dubai and Kuala Lumpur, Air Ticket included 3 week packages</p>
            <p class="card-text text-left">Travel Date 16 December 2018 - 03 January 2019</p>
            <p class="card-text text-left">Package Price: Rs. 63,000</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End of Inner Container -->
  <?php require('common/footer.php');?>
