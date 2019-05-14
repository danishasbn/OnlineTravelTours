$(document).ready(function() {
  var selectTravel = $("#txt-packageType").val();
  if (selectTravel == "3") {
    $(".travel-section").show();
  } else {
    $(".travel-section").hide();
    $(".travel-section select").attr("name", "");
    $(".travel-section select").attr("data-validation", "");

    $(".travel-section textarea").attr("name", "");
    $(".travel-section textarea").attr("data-validation", "");

    $(".travel-section #txt-airline").attr("name", "");
    $(".travel-section #txt-airline").attr("data-validation", "");

    $(".travel-section select ").prop("selectedIndex", 0);
    $(".travel-section textarea").val("");
  }
});
