<?php
	include "database.php";
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
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
			<form action="validation.php" method="POST">
				<h3>Login</h3>
				<div class="form-holder">
					<span class="lnr lnr-envelope"></span>
					<input type="email" name="email" class="form-control" placeholder="Mail" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input type="password" name="password" class="form-control password" placeholder="Password" required>
				</div>
				<span class="lnr lnr-eye login-eye" onclick="togglePass()"></span>
				<button>
					<span>Login</span>
				</button>
				<p>Don't have an account? <a href="register.php"> Register Now! </a></p>
				<p>Login as ADMIN <a href="ad_login.php"> Admin Login </a></p>
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
	</script>
</body>

</html>