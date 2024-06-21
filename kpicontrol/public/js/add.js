$(document).ready(function() {
    $("#btn-file-upload").click(function() {
        $("#add-select").hide();
        $("#select-file").show();
    })
    $("#btn-create-new-work").click(function() {
        $("#add-select").hide();
        $("#add-new-kpi").show();
    });
    $(".btn-cancel").click(function(event) {
        event.preventDefault();
        $("#add-select").show();
        $("#add-new-kpi").hide();
    });
    $(".btn-next").click(function(event) {
        event.preventDefault();
        $("#add-work").show();
        $("#add-new-kpi").hide();
    });
    $(".btn-back").click(function() {
        $("#add-work").hide();
        $("#add-new-kpi").show();
    });
    $(".btn-add-new-work").click(function() {
        $("#modal-create-work").fadeIn();
    });
    $(".btn-close").click(function(event) {
        event.preventDefault()
        $("#modal-create-work").fadeOut();
    });
    $(".btn-back-to").click(function() {
        $("#add-select").show();
        $("#select-file").hide();
    })
})