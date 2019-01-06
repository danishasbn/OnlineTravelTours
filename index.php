<?php require('common/header.php');?>

<!-- Video background -->
<div class="embed-responsive embed-responsive-16by9 video-background">
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="Asset/images/video/ParadiseChaserVideo.mp4" type="video/mp4">
    </video>
    <!-- Video Footer Text -->
    <div class="video-foot">
      <h1 class="text-center paradise-Packages" data-aos="fade-left">
        Our Packages
      </h1>
      <br>
      <img src="<?= $border; ?>" class="img-border" alt="Floral Border image"/>
      <h3 class="subtext" data-aos="fade-left">Find your ideal paradise packages</h3>
      <h5 class="subtext" data-aos="fade-left">Our Most Booked Packages</h5>
      <h6 class="subtext" data-aos="fade-left">Your Dream Holidays</h6>
    </div>
  </div>
  <!-- End of Video Background -->

  <!-- Main Index Container -->
  <div class="container">

      <div class="row">
        <!-- Card 1 -->
        <div class="card card-Packages col-md-4" data-aos="fade-up-right">
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
        <div class="card card-Packages col-md-4" data-aos="fade-up">
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
        </div>
        <div class="card card-Packages col-md-4" data-aos="fade-down">
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



  <!-- End of Index Container -->
  <?php require('common/footer.php');?>
