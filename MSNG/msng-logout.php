<?php
//activating session

session_start();

//delete all session
session_destroy();

//direct to login page
header("location: index.php");
?>