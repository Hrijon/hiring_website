<?php
  session_start();
  require'config.php';

  if(isset($_POST['register_btn']))
  {
    //      echo'<script type="text/javascript"> alert("Register button clicked") </script>';
    $username= $_POST['username'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $_SESSION['email']=$email;
    $_SESSION['address']=$address;
    $_SESSION['phone']=$phone;

    //check if password and confirm password match or not
    if($password==$cpassword)
    {
        $query= "select*from UserInfo WHERE username='$username'";
        $query_run = mysqli_query($con,$query);

      //check if username already exist of not
      if(mysqli_num_rows($query_run)>0)
      {
        //there is already a user with the same username
        echo '<script type="text/javascript"> alert("User already exist... try another name") </script>';

      }
      else
      {
        // Insert userinput data into database
        $query= "INSERT INTO UserInfo(username,password,address,email,phone) VALUES('$username','$password','$address','$email','$phone')";
        $query_run = mysqli_query($con,$query);

        //after registration process finished then send to login pageor throw an error
           
        echo 'Data Inserted';
        echo $query_run;
        //echo "Results are: " .$["ItemName"]
        if($query_run)
            {
              echo 'hello inside brac';
                  echo'<script type="text/javascript"> alert("user Registered.. go to login")</script>';
                  include("../index.html"); 
            }
            else
            {
                  echo '<script type="text/javascript"> alert("Error!!! user is not registered") </script>';
                  include("../index.html"); 

            }
      }
    } //ifpwd
    else
    {
      echo '<script type="text/javascript"> alert("password and confirm password doesnot match") </script>';
    }
    include("../index.html"); 

  } //isset
?>
    