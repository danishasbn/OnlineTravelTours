</div>
<!-- /End of Main Container -->
<!-- Footer -->
<div class="footer">
  <footer class="page-footer text-center text-muted">
    <p class="text-center"> &copy; Copyright 2019 <em> Paradise Chaser <em></p>
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
