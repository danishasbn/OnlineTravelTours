$(document).ready(function() {
  $(".travel-section").hide();
  $("#txt-packageType").change(function() {
    var test = $("#txt-packageType").val();
    if (test == "3") {
      $(".travel-section").show();
    } else {
      $(".travel-section").hide();
    }
  });
});
