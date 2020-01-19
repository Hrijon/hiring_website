<?php
$con = mysqli_connect("localhost", "root","") or die("Unable to connect");
mysqli_select_db($con, "HiringWebsite") OR die('cannot connect to database'.mysqli_error);

?>
