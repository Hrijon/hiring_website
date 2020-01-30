<?php
 	//session start will start the connection with database server
	session_start();
	require'server/config.php';

	//check the connection to the database server
	if ($con->connect_error){
	 die("Connection failed: " . $con->connect_error);
  }
  ?>

<!DOCTYPE html> 
<html> 
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel='stylesheet' type='text/css' href='css/styles.css'>
      
      <title>Index Page</title>

      <script type="text/javascript" src="js/script.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/jquery-3.3.1.js"></script>	
      <script type="text/javascript" src="js/index.js"></script>
  </head>

<div class="body-content">
  <body class="body-content">  
  
  <div class='header'>       
    <form action="server/search.php" method="POST">
      <strong class='title'>Employee Hiring Website</strong>
            <input class='search-bar' type='text'  placeholder='Search...' name='query' style = "width:50%; height:35px;")/>
      <input class="search-btn" type="submit" name="search" value="Search"/>
       
      
    
          <!-- <div id="id05" class="registerModal">
            <form class="registerModal-content animate" action="register.php" method="post">
        <p>hello this is search result.</p>
              <div class="container">
          <ol>
            <li> <?php
              error_reporting(0);
              echo $_POST['result']; ?>
                        </li>
          </ol>		
                  </div>
    </div>
      </form> -->
        
  <!-- </div> -->


  
  <div class='nav'>  
  <a href='#home'>Home</a>
  <!-- <a href='#'>Jobs</a> -->
  <!-- <button  onclick="document.getElementById('id06').style.display='block'">Jobs</button> -->
  <a id='login' onclick="document.getElementById('id06').style.display='block'">Jobs</a>

  <!--<a href='#'></a>
    <a href='#'></a> -->
  <!-- <a id='apply' onclick="document.getElementById('id04').style.display='block'">Apply</a> -->
  <a id='upload' onclick="document.getElementById('id05').style.display='block'"> &#9889; Upload</a>

  <!-- <a id ='login' href='#cart' style:color:Green;">View Carts</a> -->

      <a id='login' onclick="document.getElementById('id02').style.display='block'">Register</a>
      <a id='login' onclick="document.getElementById('id01').style.display='block'">Login</a>
    </div> 
      
  </div>



<!-- login model -->
    <div id="id01" class="loginModal">
      <form class="loginModal-content animate" action="server/login.php" method="post">

          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h2>Login Form</h2>
            <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous">
          </div>

          <div class="container">
            <label for="username"><b>Username</b></label>
             <input id="username" type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
             <input id="password" type="password" placeholder="Enter Password" name="password" required>

            <button class="login" name="login" id="login_btn" type="submit" >Login</button>

            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
        </div>

<!-- register model -->

        <div id="id02" class="registerModal">
          <form class="registerModal-content animate" action="server/register.php" method="post">

              <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h2>Registration Form</h2>
                <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous">
              </div>

              <div class="container">

                <label for="uname"><b>Name</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Enter Address" name="address" >

                <label for="email"><b>Contact e-mail</b></label>
                <input type="email" placeholder="eg: b&rpc@gmail.com" name="email" required>

                <label for="phone"><b>Contact phone</b></label>
                <input type="number" placeholder="eg: 0 452 *** *** " name="phone"><br><br>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter New Password" name="password" required>

                <label for="psw"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm your Password" name="cpassword" required>


                <button class="login" type="submit" style="background-color: darkblue" name="register_btn">Resister</button>

              </div>

              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
              </div>
          </form>
        </div>

<!--Apply model-->

          <div id="id04" class="loginModal">
              <form class="loginModal-content animate" action="server/apply.php" method="post">
                
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <h2>Application Form</h2>
                <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous"> 
                </div>
        
                <div class="container">
                  <label for="username"><b>Username</b></label>
                  <input id="username" type="text" placeholder="Enter Username" name="username" required>
        
                  <label for="psw"><b>Password</b></label>
                  <input id="password" type="password" placeholder="Enter Password" name="password" required>
        
                  <button class="login" name="login" id="login_btn" type="submit" >Login</button>
        
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
        
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>

              </form>
            </div>
        
<!-- upload model -->
          <div id="id05" class="loginModal">
            <form class="loginModal-content animate" action="server/upload.php" method="post" enctype="multipart/form-data">
        
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <h2>Upload files</h2>
                </div>
        
                <div class="container">
                  <label for="resume"><b>Resume:  </b></label>
                  <input id="resume" type="file" name="resume"> <br><br>

                  <label for="docs"><b>Add supportive documents: </b></label>
                  <button name="docs" onclick="upload()"> Click here! </button><br>

                  <script>
                    function upload() {
                      var x = document.createElement("INPUT");
                      x.setAttribute("type","file");
                      document.body.appendChild(x);
                    }
                  </script>
                  <button class="uploadRe" name="resume" id="submit_resume" type="submit"> Submit</button>
                </div>                

                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
          </div>

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

// var $raw_results;

$raw_results = mysqli_query($con, "SELECT * FROM add_job");                                                      
echo '(add_job';
echo 'alert (add_job)';

$_SESSION['result'] = $raw_results;

?>


<!-- Job model -->
          <div id="id06" class="loginModal">
            <form class="loginModal-content animate" action="" method="post">
        
              <div class="imgcontainer">
                <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h2>Job Vacancy</h2>
                <a id='add_job_btn' onclick="document.getElementById('add_job').style.display='block'"><span class="plus" >&plus; </span> Add Jobs/Employer</a> 

        <?php
                echo "<div class='column'> <div class='card' style='width: 18rem;'> <div class='card-body'> <h5 class='card-title'> ".$_SESSION['result'], "</div> </div> </div>";
//                   <!-- ". $results["ItemName"].
// " <p class='card-text'>". $results["Discription"]."<br> InStock: ". $results["stock"] . "<br><h4> Price: </h4>$ " . $results["Price"].
//  "</p> $cart_item $buy_item   -->

?>

                <div class="container">
                  
                  
                </div>                

                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Back</button>
                </div>
              </div>
            </form>
          </div>

<!-- Add Jobs Model -->
          <div id="add_job" class="loginModal">
            <form class="loginModal-content animate" action="server/job.php" method="POST">
        
              <div class="imgcontainer">
                <span onclick="document.getElementById('add_job').style.display='none'" class="close" title="Close Modal">&times;</span>
                        
                <div class="container">
                 
                  <h2>Job Description</h2>
                  <label for="cname"><b>Company Name</b></label>
                  <input id="cname" type="text" placeholder="Enter company name" name="cname" required>

                  <label for="caddress"><b>Company Address</b></label>
                  <input id="caddress" type="text" placeholder="Enter company name" name="caddress" required>

                  <label for="yemail"><b>Your Email Address</b></label>
                  <input id="yemail" type="text" placeholder="Enter email address" name="yemail" required>

                  <label for="phone"><b>Contact phone</b></label>
                  <input type="number" placeholder="eg: 0 452 *** *** " name="phone"><br><br>

                  <label for="jtitle"><b>Job Title</b></label>
                  <input id="jtitle" type="text" placeholder="Enter job title" name="jtitle" required>

                  <label for="salary"><b>Salary Per year</b></label>
                  <input type="number" placeholder="eg: 50000" name="salary" min="15000" max="3000000"><br><br>
  
                  <label for="description"><b>Description</b></label>
                  <textarea rows="4" cols="50" placeholder="Description of job and requirements.." name="descr"> </textarea><br><br>
  
                  <button class="login" name="add_job" id="login_btn" type="submit" >Submit</button>

                </div>                

                <div class="container" style="background-color:#f1f1f1">

                </div>
              </div>
            </form>
          </div>

<!-- Vacancy Model -->
  <div id="vacancy" class="loginModal">
    <form class="loginModal-content animate" action="server/vacancy.php" method="POST">

      <div class="imgcontainer">
        <span onclick="document.getElementById('vacancy').style.display='none'" class="close" title="Close Modal">&times;</span>
                
        <div class="container">
         
          <h2>VACANCY</h2>
          <!-- <label for="cname"><b>Company Name</b></label>
          <input id="cname" type="text" placeholder="Enter company name" name="cname" required>

          <label for="caddress"><b>Company Address</b></label>
          <input id="caddress" type="text" placeholder="Enter company name" name="caddress" required>

          <label for="yemail"><b>Your Email Address</b></label>
          <input id="yemail" type="text" placeholder="Enter email address" name="yemail" required>

          <label for="phone"><b>Contact phone</b></label>
          <input type="number" placeholder="eg: 0 452 *** *** " name="phone"><br><br>

          <label for="jtitle"><b>Job Title</b></label>
          <input id="jtitle" type="text" placeholder="Enter job title" name="jtitle" required>

          <label for="salary"><b>Salary Per year</b></label>
          <input type="number" placeholder="eg: 50000" name="salary" min="15000" max="3000000"><br><br>

          <label for="description"><b>Description</b></label>
          <textarea rows="4" cols="50" placeholder="Description of job and requirements.." name="descr"> </textarea><br><br> -->

          <button class="login" name="add_job" id="login_btn" type="submit" >Submit</button>

        </div>                             
          <a id='add_job_btn' onclick="document.getElementById('add_job').style.display='block'"><span class="plus" >&plus; </span> Add Jobs/Employer</a> 
          <!-- <a id='add_job_btn' onclick="document.getElementById('add_job').style.display='block'"><span class="plus" >&plus; </span> Add Jobs/Employer</a>  -->


        <div class="container" style="background-color:#f1f1f1">

        </div>
      </div>
    </form>
  </div>

  <!-- <article id='home'>
  <?php include 'server/getitem.php';?>
  </article>

  <article id='apply' hidden='hidden'>
  <?php include 'server/apply.php';?>
  </article>

  <article id='buy' hidden='hidden'>
  <h4>Thanks for buying!</h4>
  </article>
  <?php include 'server/apply.php';?>
  </article>

  <article id='buy' hidden='hidden'>
  <h4>Thanks for buying!</h4>
  </article>

  <article id='cpu' hidden='hidden'>
  <?php include 'server/getcpu.php';?>
  </article> -->


  <article id='id06'>
    <?php include 'server/vacancy.php';?>
  </article>


  <?php 
  echo 'This is results'.mysqli_query($con, "SELECT * FROM add_job");
  ?>
 
  </body>
</div>



<article id='help' hidden='hidden'>
	  <div class="profilecontainer">
        <h1>HELP</h1>
        
		<h4>More Information</h4>
		<h3>Contanct: +61 8 9360 6000</h3>
      </div>
	</article>
	
	<article id='about' hidden='hidden'>
	  <div class="profilecontainer">
        <h1>About</h1>
        <h4>Employee Hiring Company (EHC)</h4>
        <h3>Hello, welcome to Employee Hiring Company.</h3>
        <h4>Location</h4>
        <h3>EHC is located in 90 South Street Murdoch WA 6150</h3>
        <h4>How EHC relate jobs to employee from employer?</h4>
        <h3>
          EHC provide a service as a transiction medium of the employer and their employee. 
          Any employer, who is member of EHC can post an Job vacancy in EHW and employee can see it.
          And EHC will trained each group of employee and make them ready to give best in their job. 
        </h3>
    </div>
	</article>

  <sript type="text/javascript" src="js/script.js"> </script>

	</body>

  <footer>
        <div class="footer-text">
            <span>&copy; copyrightehc's2019 </span> <a class="help" href='#help'>HELP</a> <a href='#about'>ABOUT</a><br>
            <span>&#9993; ehc@gmail.com.au</span> <br>
            <span>90 South Street Murdoch WA 6150 </span><br>
            <span>&phone; +61 8 9360 6000</span><br>
        </div>
        <!-- chip displaying photo name and number -->
       <div id="chip">
        <img src="img/me.jpg" alt="Person" width="96" height="96">
        <b>Rijan</b> Contact: 0 452 *** ***
      </div>
    </form>
    </footer>

</html>

