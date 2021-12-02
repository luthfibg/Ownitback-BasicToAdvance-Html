<?php

$conn = mysqli_connect("localhost", "root", "", "dbownitback");


//check connection
if (mysqli_connect_errno()){
	echo "Connecting Database Failed: " . mysqli_connect_error();
}

?>