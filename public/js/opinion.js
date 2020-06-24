$(document).ready(function () {

    $('form').on('click', '#btnopinion', function (e) {
        e.preventDefault();
        alert(11);
        var valoration = 120;
        $.ajax({
            url: "?opinion=setOpinion",
            type: "POST",
            contentType: "application/json;charset=utf-8",
            dataType: "json",
            success: function (result) {
                alert("correcto");
            },

            error: function (errorMessage) {
                alert(errorMessage.responseText);
            }
        });
    });					
});