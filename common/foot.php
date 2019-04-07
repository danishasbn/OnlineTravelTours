<?php
//Get Project folder full path
$fullPath     =  realpath($_SERVER['DOCUMENT_ROOT']);
$BS_jquery    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/jquery-3.3.1.slim.min.js';
$BS_popper    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/popper.min.js';
$BS_bootstrap = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/bootstrap.min.js';
$CustomJS     = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/app.js';
$AosJS        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/aos.js';

// Data Table JS
$DataTableJS     = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/jquery-3.3.1.js';
$DataTableJSMin  = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/jquery.dataTables.min.js';
$DataTableBoot   = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/dataTables.bootstrap4.min.js';

// Flatpickr JS
$Flatpickr  	 = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/flatpickr.js';


?>
<!-- Bootstrap Main Scripts -->
<script src="<?= $BS_jquery; ?>"></script>
<script src="<?= $BS_popper; ?>"></script>
<script src="<?= $BS_bootstrap; ?>"></script>

<!-- Custom JS -->
<script src="<?= $CustomJS; ?>"></script>

<!-- Aos JS -->
<script src="<?= $AosJS; ?>"></script>

<!-- Data Table -->
<script src="<?= $DataTableJS; ?>"></script>
<script src="<?= $DataTableJSMin; ?>"></script>
<script src="<?= $DataTableBoot;?>"></script>

<!-- Flatpickr Js -->
<script src="<?= $Flatpickr;?>"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>
	// JQuery Validation
	$.validate();
</script>

<script>
// Initialize Animated on scroll (AOS) library
AOS.init();
</script>
