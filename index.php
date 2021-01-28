<!DOCTYPE html>
<html lang='fr'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form With Bulma and notification with toast alert, An alternative from Bootstrap</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" href="assets/index.css">
	<script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/index.js"></script>
	<script type="text/javascript" src="assets/tata.js"></script>
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
					},
					error: function() {
						$("#btnSend").removeClass("is-loading");
					}
				});
			} else {
				$("#btnSend").removeClass("is-loading");
			}
			$('input[type="text"],texatrea, select, email', this).val('');
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

<body>
	<div class="container" style="padding-top: 90px;">
		<div class="tile is-ancestor">
			<div class="tile is- is-vertical">
				<div class="tile is-child box">
					<p class="title">
					<div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="fr_FR" data-type="vertical" data-theme="light" data-vanity="geoffreylgv"><a class="LI-simple-link" href='https://tg.linkedin.com/in/geoffreylgv?trk=profile-badge'>A. Geoffrey LOGOVI</a></div>
					</p>
				</div>
				<div class="tile is-child box">
					<p class="title">
					<div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="fr_FR" data-type="vertical" data-theme="dark" data-vanity="geoffreylgv"><a class="LI-simple-link" href='https://tg.linkedin.com/in/geoffreylgv?trk=profile-badge'>A. Geoffrey LOGOVI</a></div>
					</p>
				</div>
			</div>
			<div class="tile is-parent">
				<div class="tile is-child box">
					<p class="title">
					<div class="panel">
						<div class="">
							<div id="mail-status"></div>
						</div>

						<div>
							<div class="field">
								<div class="control">
									<label style="padding-top:20px;">Name</label>
									<span id="userName-info" class="info"></span><br />
									<input type="text" name="userName" id="userName" placeholder="Votre nom" class="input is-rounded">
								</div>
							</div>
						</div>
						<div>
							<div class="field">
								<div class="control">
									<label>Email</label>
									<span id="userEmail-info" class="info"></span><br />
									<input type="text" name="userEmail" id="userEmail" placeholder="Votre mail" class="input is-rounded">
								</div>
							</div>
						</div>
						<div>
							<div class="field">
								<div class="control">
									<label>Subject</label>
									<span id="subject-info" class="info"></span><br />
									<input type="text" name="subject" id="subject" placeholder="Objet du message" class="input is-rounded">
								</div>
							</div>
						</div>
						<div>
							<div class="field">
								<div class="control">
									<label>Content</label>
									<span id="content-info" class="info"></span><br />
									<textarea name="content" id="content" class="textarea is-rounded" cols="9" rows="3" placeholder="Votre message ici" style="border-radius: 20px;"></textarea>
								</div>
							</div>
						</div>
						<div class="field" style="margin-top: 10px;">
							<button name="submit" id="btnSend" class="button is-fullwidth is-primary is-outlined is-rounded" onClick="sendContact();">Send</button>
						</div>
					</div>
					</p>
				</div>
			</div>
		</div>


	</div>
	<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</body>

</html>