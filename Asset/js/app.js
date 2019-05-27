// ---------------------------------------------Dashboard -> Update Car ------------------------------------------------------------------
// Show/Hide Panel on check
// Disable input
$(document).ready(function() {
  // On Page Load
  $("#uploadImgUpdate").attr("disabled", true);
  // On checked
  $("#changePhoto").change(function() {
    if (this.checked) {
      $("#uploadImgUpdate").attr("disabled", false);
    } else {
      $("#uploadImgUpdate").attr("disabled", true);
    }
  });

  // ------------------------------------------------  Dashboard -> Create Hotel ----------------------------------------------------------------------------

  // FlatPickr Date Availability
  $(".availabilityDate").flatpickr({
    altFormat: "F j, Y",
    dateFormat: "d/m/Y",
    minDate: "today"
  });

  $(".time").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i"
  });

  // ------------------------------------------------------- Dashboard -> Update Hotel---------------------------------------------------------
  // Show/Hide Panel on check
  // Disable input
  $("#update_upload_file").attr("disabled", true);

  // On checked
  $("#changePhoto").change(function() {
    if (this.checked) {
      $("#update_upload_file").attr("disabled", false);
    } else {
      $("#update_upload_file").attr("disabled", true);
    }
  });

  // ------------------------------------------------------ Dashboard -> View Hotel Gallery ------------------------------------------------------
  $(".exe3").zoom({ on: "click" });

  // Cancel Buttons
  $("#cancel-update").click(function() {
    window.location.reload();
  });
});

// ******************************************** -- OUTSIDE DOM-- (Document Ready) *********************************************************************************************

//jQuery disabling right-click on image
$("img").each(function() {
  $(this)[0].oncontextmenu = function() {
    return false;
  };
});

// Disabling inspect element-- hiding source code from users
document.onkeydown = function(e) {
  if (event.keyCode == 123) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
    return false;
  }
};

// Upload Multiple Images
function preview_image() {
  var total_file = document.getElementById("upload_file").files.length;
  for (var i = 0; i < total_file; i++) {
    $("#image_preview").append(
      "<img src='" +
        URL.createObjectURL(event.target.files[i]) +
        "' class='img-fluid' height='50' width='50'>"
    );
  }
}

// ------------------------------------------------  Dashboard -> Create Car ----------------------------------------------------------------------------

// Preview Single Image on Upload
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $("#displaySingle")
        .attr("src", e.target.result)
        .width(600)
        .height(300);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

// Clear File input
$("#clearInput").click(function() {
  $("#upload_file").val(null);
  $("#image_preview img").remove();
});
