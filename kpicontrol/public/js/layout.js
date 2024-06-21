$(document).ready(function () {
    $("#bar").click(function () {
        $("#sidebar-res").css('left', '0');
        $(".bg-shadow").show()
    })
    
    $(".btn-close-nav").click(function () {
        $("#sidebar-res").css('left', '-1000px');
        $(".bg-shadow").hide()
    })
    $(".bg-shadow").click(function () {
        $("#sidebar-res").css('left', '-1000px');
        $(this).hide()
    })
})