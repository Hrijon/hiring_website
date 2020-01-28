<?php
  session_start();
  require'config.php';

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }
    

    if(isset($_POST['add_job']))
    {
        $cname= $_POST['cname'];
        $yemail= $_POST['yemail'];
        $phone= $_POST['phone'];
        $jtitle = $_POST['jtitle'];
        $salary = $_POST['salary'];
        $desc = $_POST['descr'];
        $caddress = $_POST['caddress'];


        $_SESSION['yemail']=$yemail;
        $_SESSION['caddress']=$caddress;
        $_SESSION['phone']=$phone;

        // Insert userinput data into database
        $query= "INSERT INTO add_job(cname,yemail,phone,jtitle,salary,descr,caddress) VALUES('$cname','$yemail','$phone','$jtitle','$salary','$descr','$caddress')";
        $query_run = mysqli_query($con,$query);
            
        echo 'Data Inserted';
        echo $query_run;

        //check if the query is running correctly or not
        if($query_run)
        {
                echo'<script type="text/javascript"> alert("New Job added to the website.")</script>';
                // include("../index.html"); 
        }
        else
        {
                echo '<script type="text/javascript"> alert("Error!!! we are not able to added job, check out again.") </script>';
                // include("../index.html"); 

        }
        // include("../index.html"); 

    } //isset
    else{
        echo'Add job not found check your CONN or add_job attribute';
    }
?>
        