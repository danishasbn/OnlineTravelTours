<?php require('../../common/header.php');?>

<div class="container">
  <div class="row justify-content-center" >
    <h1 class="text-center trending"><img src="<?= $border; ?>" class="img-border"/> Car Rental <img src="<?= $border; ?>" class="img-border"/></h1>
  </div>
  <div class="row">
    <div class="card col-md-4 hotel-card">
      <div class="card-body">
        <img class="card-img-top img-responsive" src="../../Asset/images/test.jpg" alt="Card image cap">
        <h5 class="card-title text-center teal">Nissan March 2013</h5>
        <p class="card-text text-left"> </p>
        <p class="card-text text-left">Price per day: Rs. 1200</p>
        <button type="button" name="button" class="btn btn-book btn-lg">
          Book
          <img src="../../Asset/images/icons/click.png" class="click-icon" alt="clickbtn-icon"/>
        </button>
      </div>
      
    </div>
  </div>
</div>

<?php require('../../common/footer.php');?>
