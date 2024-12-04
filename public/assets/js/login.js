$(document).on("click", "#login", function() {
    var form = $('#login-form');
    var formData = form.serialize();
    $(".alert").remove();
    $.ajax({
        url: form.attr('action'),
        data: formData,
        type: form.attr('method'),
        dataType: 'json',
        success: function (response) {
            if (response.status == true) {
                window.location = response.redirect;
            }else{
                $(".alert").remove();
            }
        },
        error: function(error,xhr){
            var errors = error.responseJSON.errors;
            $.each(errors, function (key, val) {
                $("input[name='" + key + "']").after("<div class='alert alert-danger'>" + val + "</div>");
            });
        }
    });
});