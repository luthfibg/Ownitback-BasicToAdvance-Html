<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa|Didact+Gothic|Poppins|Manjari&display=swap">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<!-- <script type="text/javascript" src="msng-password-show.js"></script> -->

	<script type="text/javascript">
		function change() {
			var x = document.getElementById('passid').type;

			if(x == 'password') {
				document.getElementById('passid').type = 'text';
				document.getElementById('show-hide').innerHTML = '<i class="bi bi-eye-slash-fill" style="font-size: 1rem;"></i>';
			}
			else if (x == 'text') {
				document.getElementById('passid').type = 'password';
				document.getElementById('show-hide').innerHTML = '<i class="bi bi-eye-fill" style="font-size: 1rem;"></i>';
			}

		}
	</script>


	<title>MSNG - Login</title>
	<style type="text/css">
		body {
			font-family: 'Poppins', Arial;
			background-color: #ebf9fb;
		}

		h1 {
			text-align: center;
			font-weight: 300; 
		}

		form {
			margin-top: 40px;
		}

		.msng-login-title {
			text-align: center;
			text-transform: uppercase;
		}

		.msng-login-box {
			width: 250px;
			background: #fff;
			margin: 80px auto;
			padding: 20px 15px;
			box-shadow: 0px 0px 100px 4px #d6d6d6;
		}

		label {
			font-size: 10pt;
			font-weight: 200;
		}

		.msng-login-form {
			box-sizing: border-box;
			width: 100%;
			padding: 5px;
			font-size: 10pt;
			margin-bottom: 10px;
			outline: none;
		}

		.msng-login-form::-webkit-input-placeholder {
			color: #03a9f3;
			opacity: 0.5;
		}
		.msng-login-form:-moz-input-placeholder {
			color: #03a9f3;
			opacity: 0.5;
		}
		.msng-login-form:-ms-input-placeholder {
			color: #03a9f3;
			opacity: 0.5;
		}
		.msng-login-form:-o-input-placeholder {
			color: #03a9f3;
			opacity: 0.5;
		}

		.msng-btn {
			background: #03a9f3;
			color: #fff;
			font-size: 10pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px; 
		}
		.msng-btn:hover {
			background: #036;
			cursor: pointer;
		}
		.msng-signup {
			background-color: #fff;
			border: 1px solid #666;
			color: #666;
			font-size: 10px;
		}

		.msng-signup:hover {
			background: #ddd;
		}

		.msng-form-group {
			padding: 0;
		}

		#show-hide {
			position: relative;
			cursor: pointer;
			color: #03a9f3;
			left: 90%;
			top: -40px;
			padding: 5px;
		}

		.msng-link-reset {
			color: #03a9f3;
			text-decoration: none;
			font-size: 10px;
		}

		.msng-alert {
			background: #e44e4e;
			color: #fff;
			padding: 3px;
			text-align: center;
			font-size: 9px;
			border: 1px solid #b32929;
		}

		span {
			font-size: 9px;
		}
	</style>

</head>
<body>

	<?php

	if (isset($_GET['message'])){
		if ($_GET['message'] == "failed"){
			echo "<div class='msng-alert'>Username and password is not match any data</div>";
		}
	}

	?>

	<div class="msng-login-box">
		<p class="msng-login-title">E-Klinik Login</p>

		<form action="msng-login-check.php" method="POST">
			<!-- <label>Username</label> -->
			<input type="text" name="username" class="msng-login-form" style="font-family: 'Poppins', 'Comfortaa', Arial; font-size: 10px;" placeholder="Username..." autocomplete="off">

			<!-- <label>Password</label> -->
			<div class="msng-form-group">
				<input type="password" name="password" id="passid" class="msng-login-form" style="font-family: 'Poppins', 'Comfortaa', Arial; font-size: 10px;" placeholder="Password..." autocomplete="off">
				<span id="show-hide" onclick="change()">
					<i class="bi bi-eye-fill" style="font-size: 1rem;"></i>
				</span>
			</div>	
			
			

			<input type="submit" class="msng-btn msng-login" style="margin-top: 20px;" value="Login">
			<input type="submit" class="msng-btn msng-signup" style="margin-top: 10px;" value="Sign Up">

		<br/>
		<br/>

		<span>
				<center>Forgot password? Click <a class="msng-link-reset" href="#">here</a> to reset.</center>
		</span>

		</form>
	</div>
</body>
</html>