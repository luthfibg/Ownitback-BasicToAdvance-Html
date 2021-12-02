<?php

@session_start();

session_destroy();

header("location: /Ownitback/login-user.php");

?>