<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Klinik Dashboard (Admin)</title>
	<link rel="stylesheet" type="text/css" href="msng-dashboard-style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
	<?php

	session_start();

	//check whether which one accessing this page have been login?
	if ($_SESSION['level'] == ""){
		header("location: msng-login.php?message=failed");
	}

	?>

	<p><b><?php echo $_SESSION['username']; ?></b>, You're logged as <b><?php echo $_SESSION['level']; ?></b></p>
	<a href="msng-logout.php">LOGOUT</a>

	<section id="menu">
		<div class="logo">
			<img src="letter-e.png" alt="logo">
			<h2>E-Klinik</h2>
		</div>
		<div class="items">
			<li><i class="fas fa-chart-line"></i><a href="#">Dashboard</a></li>
		</div>
	</section>
</body>
</html>