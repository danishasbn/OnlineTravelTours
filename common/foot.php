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

// jQuery Zoom Effect JS
$zoom			= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/jquery.zoom.min.js';

// jQuery Form Validator JS
$formValidator	= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/jquery.form-validator.min.js';

// Slick JS
$slickJS		= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/slick.min.js';

// Bootstrap Date Picker 
$BSDatePicker	= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/bootstrap-datepicker.js';

// Sweet Alert
$sweetAlertJS	= 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/sweetalert2.min.js';

// PDF
$pdf		    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/pdfFromHTML.js';
$pdfJS		    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/OnlineTravelTours/Asset/js/jspdf.js';

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

<!-- jQuery Zoom Effect Plugin -->
<script src="<?= $zoom; ?>"></script>

<!-- jQuery Form Validator -->
<script src="<?= $formValidator; ?>"></script>

<!-- Slick Slider JS-->
<script src="<?= $slickJS; ?>"></script>

<!-- Bootstrap Datepicker JS-->
<script src="<?= $BSDatePicker; ?>"></script>

<!-- Sweet Alert  -->
<script src="<?= $sweetAlertJS; ?>"></script>

<!-- HTML TO PDF  -->
<script src="<?= $pdf; ?>"></script>
<script src="<?= $pdfJS; ?>"></script>




<script>
	// JQuery Validation
	$.validate();
</script>

<script>
// Initialize Animated on scroll (AOS) library
AOS.init();
</script>


