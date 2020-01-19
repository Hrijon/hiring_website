
<?php

 	//session start will start the connection to the database where require  calls the php page of the connection code
	session_start();
	require'config.php';

//if error it will throw an error as connect error and die the server

//if ($con->connect_error){
  //  die("Connection failed: " . $con->connect_error);
//}
	if(isset($_POST['login']))
	{
		$username= $_POST['username'];
		$password= $_POST['password'];

		$query="select*from UserInfo WHERE username='$username' AND password='$password'";
		$query_run = mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{		
			//valid
		//	include("#user-panel");
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$results = mysqli_fetch_array($query_run);
			echo 'successfully login';
			//echo($results["email"] . "hello from username");

		}
		else
		{
			//invalid
			echo'<script type="text/javascript"> alert("Invalid Username or Password")</script>';
			//include("../webclient/index.php");
		}


	}
	else{
            echo'<script type="text/javascript"> alert("Username or Password may not match.. Try again")</script>';
			include("../webclient/index.php");
	}

//include("../index.html");

?>
	
