<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa|Didact+Gothic|Poppins|Manjari&display=swap">
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

		.msng-btn {
			background: #03A9F3;
			color: #fff;
			font-size: 10pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px; 
		}
		.msng-signup {
			background-color: #fff;
			border: 1px solid #666;
			color: #666;
			font-size: 10px;
		}

		.msng-link-reset {
			color: #03A9F3;
			text-decoration: none;
			font-size: 10px;
		}

		.msng-alert {
			background: #e44e4e;
			color: #fff;
			padding: 10px;
			text-align: center;
			border: 1px solid #b32929;
		}

		span {
			font-size: 9px;
		}
	</style>

</head>
<body>

	<?php

	if (isset($_POST['message'])){
		if ($_POST['message'] == "failed"){
			echo "<div class='msng-alert'>Username and password is not match any data</div>";
		}
	}

	?>

	<div class="msng-login-box">
		<p class="msng-login-title">E-Klinik Login</p>

		<form action="msng-login-check.php" method="POST">
			<!-- <label>Username</label> -->
			<input type="text" name="Username" class="msng-login-form" style="font-family: 'Poppins', 'Comfortaa', Arial; font-size: 10px;" placeholder="Username..."autofocus="false">

			<!-- <label>Password</label> -->
			<input type="password" name="Password" class="msng-login-form" style="font-family: 'Poppins', 'Comfortaa', Arial; font-size: 10px;" placeholder="Password..." autofocus="false">

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