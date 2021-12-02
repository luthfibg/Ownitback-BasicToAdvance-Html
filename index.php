<?php

include "include/connection.php";
error_reporting(0);
@session_start();


// if (@$_SESSION['admin'] || @$_SESSION['operator']) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Haverback-Simple web memorizer</title>
	<style type="text/css">
		body {
			font-family: arial;
			font-size: 14px;
		}

		#canvas {
			width: 660px;
			margin: auto;
			border: 1px solid silver;
		}
		#header {
			font-size: 20px;
			padding: 20px;
		}
		#menu {
			background-color: #04e;

		}
		#menu ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		#menu ul li.utama {
			display: inline-table;
		}
		#menu ul li:hover {
			background-color: #03c;
		}
		#menu ul li a{
			display: block;
			text-decoration: none;
			line-height: 40px;
			padding: 0 10px;
			color: #fff;
		}
		.utama ul {
			display: none;
			position: absolute;
			z-index: 2;
		}
		.utama:hover ul {
			display: block;
		}
		.utama ul li {
			display: block;
			background-color: #6cf;
			width: 140px;
		}
		.utama ul li a:hover {
			color: #fff !important;
		}
		#content {
			min-height: 400px;
			padding: 20px;
		}
		#footer {
			text-align: center;
			padding: 20px;
			background-color: #333;
			color: #eed;
			
		}
	</style>
</head>
<body>
	<div id="canvas">
		<div id="header">Penjualan Mobil</div>
		<div id="menu">
			<ul>
				<li class="utama"><a href="">Beranda</a></li>
				<li class="utama"><a href="">Mobil</a>
					<ul>
						<li><a href="" style="color: #03c;">Lihat data</a></li>
						<li><a href="" style="color: #03c;">Tambah data</a></li>
						<li><a href="" style="color: #03c;">Report data</a></li>
					</ul>
				</li>
				<li class="utama"><a href="">Pelanggan</a></li>
				<li class="utama" style="float: right;"><a href="include/logout.php">Logout</a></li>
			</ul>
		</div>
		<div id="content">This is content part</div>
		<div id="footer">Copyright 2021 Muhamad Luthfi</div>
	</div>
</body>
</html>

<!-- <?php
// } else {
// 	header("location: login-user.php");
// }
?> -->