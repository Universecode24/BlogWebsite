<?php include "nav.php"; 
include "connection.php";
//ADDED SIGNUP PAGE
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SINGUP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <    
    
   <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">   
</head>
 <style>
     *{
         text-transform: none;
     }    
</style>   
    
    <body style="align:center; background-color:#5E74A5 ">
<div class="container login jumbotron" id="login"  style="margin-left:2%;margin-right:2%;color:#333333;">
    <form method = "POST" action = "">
<div class="header">
  <h1>SIGNUP</h1>
  <p></p>
    </div>
<div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
        <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Enter Username">
    </div>
        <div class="form-group">
      <input type="text" class="form-control" name="contact" placeholder="Enter Contact no">
    </div>
          <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-primary" name="go">Submit</button>
</form>
     </div>    
     <footer class="page-footer font-small blue pt-4 "  id="footer">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase" id="navlink" style="overflow-y:hidden;">CONTACT : 9137818209</h5>
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
  <br>Created by : Aditya Barve (BLOG WEBSITE) and made using PHP and HTML CSS
</div>
<!-- Copyright -->

</footer>  
 <script src="./removebanner.js"></script>
</body>
</html>












<?php
if(isset($_POST['go'])&&$mail==$mail){
	if(isset($_POST['name']) && $_POST['name']!= "" && isset($_POST['email']) && $_POST['email']!= ""){
	if(isset($_POST['contact']) && $_POST['contact']!= "" && isset($_POST['password']) && $_POST['password']!= ""){	
$name = $_POST['name'];
$mail = $_POST['email'];
$mob = $_POST['contact'];
$pass = $_POST['password'];

$datainsert = "INSERT INTO users (NAME, EMAIL, CONTACT, PASSWORD) VALUES('$name', '$mail', '$mob','$pass')";

$execute = mysqli_query($connection, $datainsert);

if($execute){
	echo "<h1>DATA INSERTED</h1>"; 
}
else {
	echo "<h1>ERROR OCCOURED</h1>";
}

}
else{
	echo "<h1>ALL FIELDS REQUIRED</h1>";
}
?>
<script type="text/javascript">
window.location="login.php";
alert("USER REGISTERED PLEASE LOGIN");
</script>
<?php
}
}
?>