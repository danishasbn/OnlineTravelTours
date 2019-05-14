$(document).ready(function() {
  $(".travel-section").hide();

  $("#txt-packageType").change(function() {
    var selectTravel = $("#txt-packageType").val();
    if (selectTravel == "3") {
      $(".travel-section").show();

      $(".travel-section select").attr("name", "txt-country");
      $(".travel-section #txt-airline").attr("name", "txt-airline");
      $(".travel-section select").attr("data-validation", "required");

      $(".travel-section textarea").attr("name", "txt-terms-and-conditions");
      $(".travel-section textarea").attr("data-validation", "required");
    } else {
      $(".travel-section").hide();
      $(".travel-section select").attr("name", "");
      $(".travel-section select").attr("data-validation", "");

      $(".travel-section #txt-airline").attr("name", "");
      $(".travel-section #txt-airline").attr("data-validation", "");

      $(".travel-section textarea").attr("name", "");
      $(".travel-section textarea").attr("data-validation", "");
      
      // Clear Value
      $(".travel-section select ").prop("selectedIndex", 0);
      $(".travel-section textarea").val("");
    }
  });
});
