$(document).ready(function() {
  $("input[type='radio']").click(function() {
    var curr_price = $("#curr_price").val();
    var getValue = $("input[name='days']:checked").val();
    var calculate = curr_price * getValue;
    $("#new_price").val(calculate);
  });
});
