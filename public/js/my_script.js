$(document).ready(function() {
    $("#products").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#trending").offset().top
        }, 1500);
    });

    $("#contactus").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".contact-form").offset().top
        }, 1500);
    });

    $("#aboutus").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("footer").offset().top
        }, 1500);
    });

})