
<?php
	 //session start will start the connection to the database where require  calls the php page of the connection code
	session_start();
	require'config.php';
  
  
  console.log ("welcome to registration page");
//create table employeeInfo(employeeId int(11) PRIMARY KEY auto increment, 
//      name varchar(255) unique, password varchar(255), address varchar(255), email varchar(255), phone number);

//if error it will throw an error as connect error and die the server

      if(isset($_POST['register_btn']))
      {
        //      echo'<script type="text/javascript"> alert("Register button clicked") </script>';
        $username= $_POST['username'];
        $password= $_POST['password'];
        $cpassword= $_POST['cpassword'];
        $address = $_POST['address'];
        $email = $_post['email'];
        $phone = $_post['phone'];
          $_SESSION['email']=$email;
          $_SESSION['address']=$address;
          $_SESSION['phone']=$phone;

        if($password==$cpassword)
        {
          $query= "select*from cust_db WHERE username='$username'";
          $query_run = mysqli_query($con,$query);

          if(mysqli_num_rows($query_run)>0)
          {
            //there is already a user with the same username
            echo '<script type="text/javascript"> alert("User already exist... try another name") </script>';
          }
            
          else
          {
            $query= "INSERT INTO cust_db(username,password,address,email, phone) values('$username','$password','$address','$email', '$phone')";
            $query_run = mysqli_query($con,$query);

              if($query_run)
              {
                echo'<script type="text/javascript"> alert("user Registered.. go to login")</script>';
                include("../webclient/index.php");
	            }
              else
              {
                echo '<script type="text/javascript"> alert("Error!!! user is not registered") </script>';
              }
          }
   	    } //ifpwd
   	  	else
   		  {
          echo '<script type="text/javascript"> alert("password and confirm password doesnot match") </script>';
          else
          {
            echo '<script type="text/javascript"> alert("Error!!! user is not registered") </script>';
          }
        }
   	  } //isset
?>
