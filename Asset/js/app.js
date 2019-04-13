//jQuery disabling right-click on image
$('img').each(function () {
  $(this)[0].oncontextmenu = function () {
    return false;
  };
});

// Disabling inspect element-- hiding source code from users
document.onkeydown = function (e) {
  if (event.keyCode == 123) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
    return false;
  }
}

// ---------------------------------------------Dashboard -> Update Car ------------------------------------------------------------------
// Show/Hide Panel on check 
// Disable input 
$(document).ready(function () {

  // On Page Load
  // $('#uploadImagePanel').hide();
  // $('#uploadImg').removeAttr('name');
  // $('#uploadImg').attr('data-validation', false);
  $('#uploadImgUpdate').attr('disabled', true);
  // On checked
  $('#changePhoto').change(function () {
    if (this.checked) {
      $('#uploadImgUpdate').attr('disabled', false);
      // $('#uploadImagePanel').fadeIn('slow');
      // $('#uploadImg').attr('data-validation', 'required');
      // $('#uploadImg').attr('name', 'uploadImg');
    } else {
      $('#uploadImgUpdate').attr('disabled', true);
      // $('#uploadImagePanel').fadeOut('slow');
      // $('#uploadImg').attr('data-validation', false);
      // $('#uploadImg').removeAttr('name');
    }
  });


  // ------------------------------------------------  Dashboard -> Create Hotel ----------------------------------------------------------------------------

  // FlatPickr Date Availability
  $(".availabilityDate").flatpickr({
    altFormat: "F j, Y",
    dateFormat: "d/m/Y",
    minDate: "today"
  });
});

// Upload Multiple Images
function preview_image() {
  var total_file = document.getElementById("upload_file").files.length;
  for (var i = 0; i < total_file; i++) {
    $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' class='img-fluid' height='50' width='50'>");

  }
}
// ------------------------------------------------  Dashboard -> Create Car ----------------------------------------------------------------------------

// Preview Single Image on Upload
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#displaySingle')
        .attr('src', e.target.result)
        .width(600)
        .height(300);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

// ------------------------------------------------------- Dashboard -> Update Hotel---------------------------------------------------------

// Show/Hide Panel on check 
// Disable input 
$(document).ready(function () {
  $('#upload_file').attr('disabled', true);
  // On checked
  $('#changePhoto').change(function () {
    if (this.checked) {
      $('#upload_file').attr('disabled', false);
    } else {
      $('#upload_file').attr('disabled', true);
    }

  });
});