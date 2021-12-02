<?php
@session_start();
error_reporting(0);
include "include/connection.php";

// if ($_SESSION['admin'] || $_SESSION['operator']) {
// 	header("location: index.php");
// } else {

	if (isset($_SESSION['user'])){
		header("location: index.php");
	}
	if (isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = md5($_POST('pass'));

		$sql = "select * from tb_owlogin where username='$user' and password='$pass' ";
		$result = mysqli_query($connect, $sql);

		if ($result -> num_rows > 0){
			$row = mysqli_fetch_assoc('$result');
			if($row['level'] == "admin"){
				$_SESSION['admin'] = $row['id_user'];
				header("index.php");
			} else if ($row['level'] == "operator") {
				$_SESSION['operator'] = $row['id_user'];
				header("index.php");
			}
		} else {
			echo "<script>alert('Check it back your username or password')</script>";
		}
	}

// if (@$_SESSION['admin'] || @$_SESSION['operator']) {
// 	header("location: index.php");
// } else {

?>

<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="php" href="login-handler.php"> -->
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
		</div>
	</div>
</body>
</html>
<!-- <?php

// }

?> -->