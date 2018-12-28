<!-- Footer -->
<div class="footer">
  <footer class="page-footer text-center text-muted">
      <div class="footer-copyright text-center py-3">
        <ul class=" list-inline">
          <li class="list-inline-item"><a href="#"><img class="social-icon" src="<?= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/icons/fb-icon.png'; ?>" alt="social-icon-img" /></a></li>
          <li class="list-inline-item"><a href="#"><img class="social-icon" src="<?= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/icons/insta-icon.png'; ?>" alt="social-icon-img" /></a></li>
          <li class="list-inline-item"><a href="#"><img class="social-icon" src="<?= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/images/icons/twitter-icon.png'; ?>" alt="social-icon-img" /></a></li>
        </ul>
        <p class="text-center text-dark copyright"> &copy; Copyright 2019 <em> Paradise Chaser <em></p>
      </div>
    </footer>
  </div>
  <!-- /Footer -->
  <?php
  //Get Project folder full path
  $fullPath     =  realpath($_SERVER['DOCUMENT_ROOT']);
  $BS_jquery    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/jquery-3.3.1.slim.min.js';
  $BS_popper    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/popper.min.js';
  $BS_bootstrap = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/bootstrap.min.js';
  $CustomJS     = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/app.js';
  $AosJS        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/aos.js';
  ?>
  <!-- Bootstrap Main Scripts -->
  <script src="<?= $BS_jquery; ?>"></script>
  <script src="<?= $BS_popper; ?>"></script>
  <script src="<?= $BS_bootstrap; ?>"></script>
  <script src="<?= $CustomJS; ?>"></script>
  <script src="<?= $AosJS; ?>"></script>
  <script>
  // Initialize Animated on scroll (AOS) library
  AOS.init();
</script>
</body>
</html>
