$(document).ready(function(){
    let id;
    $(".setting-content-item").click(function(){
        let data= $(this).data('setting');
        id ="#" + data;
        $(id).show();
        $("#setting-content-overview").hide()
    })
    $(".btn-back").click(function(event) {
        event.preventDefault();
        $(id).hide();
        $("#setting-content-overview").show()
    })
})