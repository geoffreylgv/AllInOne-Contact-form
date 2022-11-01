function sendContact() {
    $("#btnSend").addClass("is-loading");
    var valid;
    valid = validateContact();
    if (valid) {
        jQuery.ajax({
            url: "contact_mail.php",
            data: 'userName=' + $("#userName").val() + '&userEmail=' + $("#userEmail").val() + '&subject=' + $("#subject").val() + '&content=' + $(content).val(),
            type: "POST",
            success: function(data) {
                $("#mail-status").html(data);
                $("#btnSend").removeClass("is-loading");
            },
            error: function() {
                $("#btnSend").removeClass("is-loading");
            }
        });
    } else {
        $("#btnSend").removeClass("is-loading");
    }
    
}

function validateContact() {
    var valid = true;
    $(".demoInputBox").css('background-color', '');
    $(".info").html('');

    if (!$("#userName").val()) {
        $("#userName-info").html("(required)");
        $("#userName").addClass('is-danger');
        valid = false;
    }
    if (!$("#userEmail").val()) {
        $("#userEmail-info").html("(required)");
        $("#userEmail").addClass('is-danger');
        valid = false;
    }
    if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail-info").html("(invalid)");
        $("#userEmail").addClass('is-danger');
        valid = false;
    }
    if (!$("#subject").val()) {
        $("#subject-info").html("(required)");
        $("#subject").addClass('is-danger');
        valid = false;
    }
    if (!$("#content").val()) {
        $("#content-info").html("(required)");
        $("#content").addClass('is-danger');
        valid = false;
    }

    return valid;
}