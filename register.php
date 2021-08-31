<?php 
	include "database.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="./fonts/linearicons/style.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="./css/login_register.css">

</head>

<body>

	<div class="wrapper">
		<div class="inner">
			<img src="./images/image-1.png" alt="" class="image-1">
			<form action="registration.php" method="POST">
				<h3>New Account?</h3>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" name="uname" class="form-control" placeholder="Username" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input type="text" name="number" class="form-control" placeholder="Phone Number" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-envelope"></span>
					<input type="email" name="email" class="form-control" placeholder="Mail" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input type="password" name="password" class="form-control password" placeholder="Password" required>
				</div>
				<span class="lnr lnr-eye" onclick="togglePass()"></span>
				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input type="password" name="cpassword" class="form-control confirm-password" placeholder="Confirm Password" required>
				</div>
				<span class="lnr lnr-eye confirm" onclick="confirmPass()"></span>
				<button>
					<span>Register</span>
				</button>
				<p>Already have an account? <a href="login.php"> Login! </a></p>
			</form>
			<img src="./images/image-2.png" alt="" class="image-2">
		</div>

	</div>


	<script>
		var state = false;
		function togglePass() {

			const pass = document.querySelector(".password");
			if (state) {
				pass.setAttribute("type", "password");
				state = false;
			}
			else {
				pass.setAttribute("type", "text");
				state = true;
			}
		}
		function confirmPass() {
			const confirm_pass = document.querySelector(".confirm-password");
			if (state) {
				confirm_pass.setAttribute("type", "password");
				state = false;
			}
			else {
				confirm_pass.setAttribute("type", "text");
				state = true;
			}
		}

	</script>


</body>

</html>