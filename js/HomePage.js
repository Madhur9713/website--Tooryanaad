$(document).ready(function () {
    // Activate Carousel
    $("#myCarousel").carousel({
        interval: 2000
    });
    $("#myCarousel1").carousel({
        interval: 2000
    });
    $("#formName").focus(function () {
        $("#hide").css("display", "inline").fadeOut(2000);
    });

    $("#field").fadeIn("slow");

    $("#reg").click(function () {
        $("#hide").css("display", "inline").fadeOut(2000);
    });


    $("#finalreg").click(function () {
        alert("Your Form Has Been Submitted".text());
    });
});
