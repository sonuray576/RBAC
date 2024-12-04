$(document).on("click", "#assignPermission", function(e) {
    e.preventDefault();
    var form = $('#assign-permission');
    var formData = form.serialize();
    $(".text-danger").remove();
    $.ajax({
        url: form.attr('action'),
        data: formData,
        type: form.attr('method'),
        dataType: 'json',
        success: function (response) {
            if (response.status == true) {
                window.location = response.redirectUrl;
            }else{
                $(".alert").remove();
            }
        },
        error: function(error,xhr){
            var errors = error.responseJSON.errors;
            $.each(errors, function (key, val) {
                if ($("input[name='" + key + "']").length > 0) {
                    $("input[name='" + key + "']").after("<div class='text-danger'>" + val + "</div>");
                } else if ($("select[name='" + key + "']").length > 0) {
                    $("select[name='" + key + "']").after("<div class='text-danger'>" + val + "</div>");
                }
                
            });
        }
    });
});

$(document).on("click", "#updatePermission", function(e) {
    e.preventDefault();
    var form = $('#update-permission');
    var formData = form.serialize();
    $(".text-danger").remove();
    $.ajax({
        url: form.attr('action'),
        data: formData,
        type: form.attr('method'),
        dataType: 'json',
        success: function (response) {
            if (response.status == true) {
                window.location = response.redirectUrl;
            }else{
                $(".alert").remove();
            }
        },
        error: function(error,xhr){
            var errors = error.responseJSON.errors;
            $.each(errors, function (key, val) {
                if ($("input[name='" + key + "']").length > 0) {
                    $("input[name='" + key + "']").after("<div class='text-danger'>" + val + "</div>");
                } else if ($("select[name='" + key + "']").length > 0) {
                    $("select[name='" + key + "']").after("<div class='text-danger'>" + val + "</div>");
                }
                
            });
        }
    });
});