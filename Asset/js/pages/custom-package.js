$(document).ready(function() {
  $("input[type='radio']").on("click", function() {
    var curr_price = $("#curr_price_hotel").val();
    var getRoom = $("input[name='room_type']:checked").attr("data-price");
    var getOccupacy = $("input[name='occupacy']:checked").attr("data-price");
    var getMeal = $("input[name='meal']:checked").attr("data-price");

    var calculateRoom = parseInt(getRoom);
    var calculateMeal = parseInt(getMeal);
    var calculateOccupacy = parseInt(getOccupacy);

    var calculateTotal =
      (parseInt(curr_price) +
        parseInt(calculateRoom) +
        parseInt(calculateMeal)) *
      calculateOccupacy;
    $("#new_hotel_price").val(calculateTotal);
  });

  // // Get price
  var curr_price_travel = $("#curr_price_travel").val();

  $("#sltAdult").change(function() {
    // Get No. of adult
    var paxAdult = $("#sltAdult").val();
    var totalAdult = paxAdult * curr_price_travel;
    $("#paxAdult").val(totalAdult);
  });

  $("#sltTeen").change(function() {
    // Get No. of teen
    var paxTeen = $("#sltTeen").val();
    var totalTeen = paxTeen * curr_price_travel;
    $("#paxTeen").val(totalTeen);
  });

  $("#sltChild").change(function() {
    // Get No. of children
    var paxChild = $("#sltChild").val();
    var totalChild = curr_price_travel * 0.75 * paxChild;
    $("#paxChild").val(totalChild);
  });

  $("#sltInfant").change(function() {
    // Get No. of infants
    var paxInfant = $("#sltInfant").val();
    var totalInfant = curr_price_travel * 0.5 * paxInfant;
    $("#paxInfant").val(totalInfant);
  });

  $(".pax").change(function() {
    // Get Calculated Values
    var calAdult = $("#paxAdult").val();
    var calTeen = $("#paxTeen").val();
    var calChild = $("#paxChild").val();
    var calInfant = $("#paxInfant").val();

    var totalPax =
      parseFloat(calAdult) +
      parseFloat(calTeen) +
      parseFloat(calChild) +
      parseFloat(calInfant);

    // console.log(totalPax);
    $("#new_price_travel").val(totalPax);
  });
});
