<?php

echo "alert (hello)";

ini_set('display_startup_errors', 1);	
	//session start will start the connection to the database where require  calls the php page of the connection code
	session_start();
	require'config.php';
	
//if error then it will throw an connect error and die the server
if ($con->connect_error){
  die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['vacancy'])) { 
    echo "This is Button1 that is selected"; 
}

var $raw_results;

$raw_results = mysqli_query($con, "SELECT * FROM add_job";                                                      
echo '(add_job';
echo 'alert (add_job)';

$_SESSION['result'] = $raw_results;

?>