<?php
// session_start();
include "nav.php";
include "connection.php";
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
if(isset($_POST['go'])){
$mail = $_POST['email'];
$pass = $_POST['password'];
$checkall = "SELECT * FROM users WHERE EMAIL = '$mail'";
$result = mysqli_query($connection, $checkall);
$count = mysqli_num_rows($result);		
if($count==0){
?>
<script type="text/javascript">
//window.location="register.php";
alert("USER DOES NOT EXIST PLEASE REGISTER");
</script>
<?php
}

$checkal = "SELECT * FROM users WHERE EMAIL = '$mail' AND PASSWORD='$pass'";
$resultt = mysqli_query($connection, $checkal);
$countt = mysqli_num_rows($resultt);		
if($countt==0){
?>
<script type="text/javascript">
//window.location="register.php";
alert("INCORRECT PASSWORD PLEASE CHECK THE PASSWORD AND ENTER AGAIN");
</script>
<?php
}
else{
    $querry1 = "SELECT * FROM users WHERE EMAIL = '$mail' AND PASSWORD='$pass'";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
            $name = $querry3['NAME'];
        }
     $_SESSION["loggedin"] = true;
    $_SESSION["uname"] = $name;
?>
<script type="text/javascript">

window.location="mywork.php";
alert("PLEASE WAIT REDIRECTING");
</script>
<?php
}
}
?>















<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINKING BS & JS-->
  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jqery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
     -->
    <!--LINKING EXTERNAL STYLE SHEET-->
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css"> -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">   
</head>
 <style>
     *{
         text-transform: none;
     }    
</style>   
    
    <body style="align:center; background-color:#5E74A5;">
<div class="container login jumbotron" id="login"  style="margin-left:2%;margin-right:2%; color:#333333;">
  <h2>Log In</h2>
 
  <form method="POST" action="">
    
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
          <div class="form-group">
      <!--<label for="pwd">Password:</label>-->
       <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-primary" name="go" style="background-color:#F76C6C">Submit</button>
  </form>
    </div>    




<!-- Footer -->
<footer class="page-footer font-small blue pt-4 id="navlink"" id="footer">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase" id="navlink">CONTACT : 9137818209</h5>
      <p id="navlink">OR MAIL US AT : adityabarve111@gmail.com</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
         

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

    
      <ul class="list-und" style="list-style:none;">
       
        <li>
          <a href="#nav" id="navlink">Back to top of page</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
  <?php  
/*error_reporting(0); 
session_start(); 
 
if(isset($_SESSION['views'])) 
  $_SESSION['views'] = $_SESSION['views']+1; 
else
  $_SESSION['views']=1; 
    
echo"<h5 ='color:#fff'>views on the website = ".$_SESSION['views']."</h5>"; 
*/
?>
</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" id="navlink">
  <br>Created by : Aditya Barve
</div>
<!-- Copyright -->

</footer>  
 <script src="./removebanner.js"></script>
</body>
</html>