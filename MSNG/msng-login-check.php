<?php

//activate session with php
session_start();
include 'msng-connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "select * from tb_msng_user where username='$username' and password='$password'");
$checkdata = mysqli_num_rows($login);

//checking whether username and password is found in database
if ($checkdata > 0){
	$data = mysqli_fetch_assoc($login);

	//check if user login as admin
	if ($data['level'] == "admin"){
		//make session
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		//direct to admin dashboard
		header("location: msng-dashboard-admin.php");

	//check if user login as operator
	} else if ($data['level'] == "operator"){
		//make session
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "operator";
		//direct to admin dashboard
		header("location: msng-dashboard-operator.php");
	} else {
		header("location: index.php?message=failed");
	}
} else {
	header("location: index.php?message=failed");
}

?>