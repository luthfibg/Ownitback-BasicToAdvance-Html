<?php
@$connect = mysqli_connect("localhost", "root", "") or die (mysqli_error());
mysqli_select_db($connect, "dbownitback") or die (mysqli_error());
?>