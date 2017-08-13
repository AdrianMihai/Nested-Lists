<!DOCTYPE html>
<html>
	<head>
		<title>Password Validation</title>

		<!-- META TAGS -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="./resources/css/main.css">
		<link rel="stylesheet" type="text/css" href="./resources/css/passValidation.css">

		<!-- JAVASCRIPT -->
		<script src="http://code.jquery.com/jquery-2.2.4.min.js" 
				integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  				crossorigin="anonymous"></script>
  		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
				integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
				crossorigin="anonymous"></script>
		<script type="text/javascript" src="./resources/js/passValidation.js"></script>
	</head>

	<body>

		<div class="main-container">

			<div class="form-container">
				<h2>Type your password to validate it</h2>
				<hr>

				<form class="form" data-tag="passValidation">
					<!-- Password inputs -->
					<input type="password" class="password" data-tag="password" value="" placeholder="Enter your password" required />
					<input type="password" class="passwordRepeat" data-tag="passwordConf" value=""
							placeholder="Confirm the password" required />

					<div class="information-container">
						<p class="pass-warning text-bad" data-toggled="false">The passwords do not match!</p>
						<div class="strength-calculator">
							<ul class="indicator">
								<li>
									<div class="colored password-bad "></div> <!-- Used for coloring the boxed -->
								</li>
								<li>
									<div class="colored password-weak"></div> <!-- Used for coloring the boxed -->
								</li>
								<li>
									<div class="colored password-ok"></div> <!-- Used for coloring the boxed -->
								</li>
								<li>
									<div class="colored password-strong"></div> <!-- Used for coloring the boxed -->
								</li>
							</ul>
							<p class="result-text text-weak">Your password is weak.</p>
							<hr>
						</div>
					</div>

					<div class="hints">
						<ul data-toggled="false">
							<li>The password must have between 8 and 16 characters.</li>
							<li>It should also have an uppercase. [A-Z]</li>
							<li>Or a digit at least. [0-9]</li>
							<li>Special characters work too. [!$%^&*()...]</li>
						</ul>
					</div>
					<button class="btn" type="submit">Submit</button>
				</form>
			</div>
		</div>

		<script type="text/javascript">
			$(document).ready(function(){
				
			});
		</script>
	</body>
</html>