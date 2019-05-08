$(document).ready(function() {
  // Check in and Check out
  $(".checkIn")
    .datepicker({
      format: "dd-mm-yyyy",
      todayBtn: true,
      autoclose: true,
      // startDate: new Date()
      startDate: $("#checkin").val()
    })

    .on("changeDate", function(e) {
      var checkInDate = e.date,
        $checkOut = $(".checkOut");
      checkInDate.setDate(checkInDate.getDate() + 1);
      $checkOut.datepicker("setStartDate", checkInDate);
      $checkOut.datepicker("setDate", checkInDate).focus();
    });
  $(".checkOut").datepicker({
    format: "dd-mm-yyyy",
    todayBtn: true,
    autoclose: true,
    endDate: $("#checkout").val()
  });

  // Get No. of Nights
  $(".checkIn")
    .datepicker()
    .bind("change", function() {
      calculate();
    });

  $(".checkOut")
    .datepicker()
    .bind("change", function() {
      calculate();
    });

  function calculate() {
    var d1 = $(".checkIn").datepicker("getDate");
    var d2 = $(".checkOut").datepicker("getDate");
    var oneDay = 24 * 60 * 60 * 1000;
    var diff = 0;
    if (d1 && d2) {
      diff = Math.round(Math.abs((d2.getTime() - d1.getTime()) / oneDay));
    }
    $(".calculated").val(diff);
  }
});
