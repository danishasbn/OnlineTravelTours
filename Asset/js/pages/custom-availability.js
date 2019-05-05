$(document).ready(function () {
    // Check in and Check out
    $(".checkIn")
        .datepicker({
            format: "dd-mm-yyyy",
            todayBtn: true,
            autoclose: true,
            // startDate: new Date()
            startDate: $("#checkin").val()
        })
        .on("changeDate", function (e) {
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
});
