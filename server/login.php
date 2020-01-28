
<?php
 	//session start will start the connection with database server
	session_start();
	require'config.php';

	//check the connection to the database server
	if ($con->connect_error){
	 die("Connection failed: " . $con->connect_error);
	}

	//Check the parameter exist or not 
	if(isset($_POST['login']))
	{
		$username= $_POST['username'];
		$password= $_POST['password'];

		$query="select*from UserInfo WHERE username='$username' AND password='$password'";
		$query_run = mysqli_query($con,$query);

		//check all rows in database 
		if(mysqli_num_rows($query_run)>0)
		{		
			//compare the userinputs with database
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$results = mysqli_fetch_array($query_run);
			echo 'successfully login';
		}
		else
		{
			//invalid
			echo'<script type="text/javascript"> alert("Invalid Username or Password")</script>';
			//include("../index.php");
		}
	}//isset end

	else{
            echo'<script type="text/javascript"> alert("Username or Password may not match.. Try again")</script>';
			//include("../index.php");
	}

//include("../index.html");

?>
	
