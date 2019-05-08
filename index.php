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
      
      <!-- <img src="<?= $border; ?>" class="img-border" alt="Floral Border image"/> -->
      <h3 class="subtext" data-aos="fade-left">Find your ideal paradise packages</h3>
      <h5 class="subtext" data-aos="fade-left">View Our Most Booked Packages</h5>
      <h6 class="subtext" data-aos="fade-left">Plan your Dream Holidays Now!</h6>

    </div>

    
  </div>
  <!-- End of Video Background -->

  <!-- Main Index Container -->
  <div class="container">

  <h3 class="text-center">Gallery</h3>

       <?php
  $sql = "select * from tbl_gallery";
  $query = mysqli_query($dbc, $sql);
  if($query){
    ?>
    <div class="slider center">
    <?php
    while($row = mysqli_fetch_array($query)){
      ?>
    <a href="<?= $Packages; ?>">
      <div class="clip">
        <h3>
          <div class="top"><img src="<?= "dashboard/uploadImages/".$row['imagePath'];?>" /></div>
        </h3>
      </div>
      </a>
      <?php
    }
    ?>
    </div>
    <?php
  }
?>

<style>

h3 img{
  height:autopx;
  width:100%;
}
h3{
  padding:2%;
}
  .top {
    font-size: 70%;
    /* height: 70%; */
    
    margin: 0 auto;
    background-color: rgba(red, 0.3);
  }
.clip {
  /* height: 100px; */
  width:100%;
  overflow: hidden;
  bottom: 0;
  
}
.center .slick-slide {
  background-color: rgba(red, 0.3);
  /* height: 400px; */
}
</style>



      
    </div>
    

  <!-- End of Index Container -->
  <?php require('common/footer.php');?>


  <script>


$(document).ready(function(){

$('.center').slick({
  centerMode: true,
  infinite: true,
  centerPadding: '60px',
  slidesToShow: 3,
  speed: 500,
  variableWidth: false,
  autoplay:true,
  dots: false,
  prevArrow: false,
  nextArrow: false,
  autoplaySpeed: 1000,

});
$('.center').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  console.log('beforeChange', currentSlide, nextSlide);
});
$('.center').on('afterChange', function(event, slick, currentSlide){
  console.log('afterChange', currentSlide);
});



});
		
</script>


