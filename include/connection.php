<?php

@$server = "localhost";
@$user = "root";
@$pass = "";
@$database = "dbownitback";
@$connect = mysqli_connect($server, $user, $pass, $database);
if(!$connect){
	die("<script>alert('Database failed to load')</script>");
} else {
	echo "<script>alert('Success to load database')</script>";
}

?>