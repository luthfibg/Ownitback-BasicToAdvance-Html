<!DOCTYPE html>
<html>
<head>
	<title>E-Klinik Dashboard (Operator)</title>
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
</body>
</html>