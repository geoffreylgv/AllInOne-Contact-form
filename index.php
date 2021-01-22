<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form With Bluma, An alternative from Bootstrap</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<style>
		.panel {
			max-width: 380px !important;
			margin: 0 auto !important;
			padding: 40px 40px 50px;
			border-radius: 3px;
		}
	</style>
	<script>
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
						$("#btnSend").addClass("fa fa-check");
					},
					error: function() {
						$("#btnSend").removeClass("is-loading");
						$("#btnSend").addClass("fa fa-exclamation-circle");
					}
				});
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
	</script>
</head>

</html>