<?php
@session_start();
include "include/connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="php" href="login-handler.php">
	<title>Login User</title>
	<style type="text/css">
		body {
			font-family: arial;
			font-size: 14px;
			background-color: #222;
		}

		#main {
			width: 300px;
			margin: 0 auto;
			margin-top: 12%;
		}

		#title {
			padding: 15px;
			text-align: center;
			color: #fff;
			font-size: 20px;
			background-color: #04e;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
			border-bottom: 3px solid #366;
		}

		#user-input {
			background-color: #ccc;
			padding: 20px;
			padding-top: 40px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}

		input {
			padding: 10px;
			border: 0;
		}
		.lg {
			width: 240px;
			border-radius: 5px;
			outline-width: 1px;
			outline-color: #04e;
		}
		.btn {
			background-color: #04e;
			border-radius: 7px;
			color: #fff;
			width: 100%;
		}
		.btn:hover {
			background-color: #036;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="main">
		<div id="title">
			Login Page
		</div>
		<div id = "user-input">
			<form action="" method="POST">
				<div>
					<input type="text" name="user" placeholder="Username or email" class="lg" autofocus/>
				</div>
				<div style="margin-top: 10px;">
					<input type="password" name="pass" placeholder="Password" class="lg">
				</div>
				<div style="margin-top: 40px;">
					<input type="submit" name="login" value="Login" class="btn">
				</div>
			</form>
			<?php

				$user = @$_POST['user'];
				$pass = @$_POST['pass'];
				$login = @$_POST['login'];

				if ($login) {
					if ($user == "" && $pass == "") {
						echo "<script type='text/Javascript'>alert('Username and Password can't be empty)</script>";
					} else if ($user == "") {
						echo "<script type='text/Javascript'>alert('Username can't be empty')</script>";
					} else if ($pass == "") {
						echo "<script type='text/Javascript'>alert('Password can't be empty')</script>";
					} else {
						$sql = mysqli_query($connect, "select * from tb_owlogin where username = '$user' and password = md5('$pass')") or die (mysqli_error());
						$data = mysqli_fetch_array($sql);
						$check = mysqli_num_rows($sql);

						if($check > 0){
							if($data['level'] == "admin"){
								@$SESSION['admin'] = $data['id_user'];
								header("location: index.php");
							} else if ($data['level'] == "operator"){
								@$SESSION['operator'] = $data['id_user'];
								header("location: index.php");
							}
						} else {

						}
					}
				}

			?>
		</div>
	</div>
</body>
</html>