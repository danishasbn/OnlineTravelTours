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
});
