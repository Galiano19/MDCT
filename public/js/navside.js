$(document).ready(function() {
    $(".navBtn").click(function() {
        //$("#side-nav").css("left","0");
        //$("#side-nav").animate({"left":"0"},200);
        //$("#side-nav").addClass("open");
        $("#side-nav").toggleClass("on");

        if ($("#side-nav").hasClass("on")) {
            $("#side-nav").animate({ "left": "0" }, 200);
            $(".navBtn").text("more_horiz");
        } else {
            $("#side-nav").animate({ "left": "-150px" }, 200);
            $(".navBtn").text("more_vert");
        }
    });
});