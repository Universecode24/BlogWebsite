<?php
include "nav.php";
include "connection.php";
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $name = $_SESSION["uname"];


    
  
         $qury = "SELECT * FROM writee WHERE NAME LIKE '$name' ";
           $exe = mysqli_query($connection,$qury);
     
           if(mysqli_num_rows($exe)> 0){
    if(isset($_GET['id'])){
    $idval = $_GET['id'];
    $del1 = "DELETE FROM writee WHERE ID = '$idval'";
    $del2 = mysqli_query($connection,$del1);
    if(del2){
        echo "<script>alert('CONTENT DELETED')</script>";
        echo "<script>window.open('del.php','_self')</script>";
    }
        else{
            echo "<script>alert('ERROR OCCOURED')</script>";
        }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>MY CONTENTS</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINKING BS & JS-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jqery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!--LINKING EXTERNAL STYLE SHEET-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
    <body style="background-color:#5E74A5">
      <div class="container">
<br>
<br>
<h1>
    MY CONTENTS
    </h1>
    <table border="2px" class="table table-hover" style="color:white;">
    <tr>
        <th>
        SR. NO
        </th>
        <th>
        NAME
        </th>
        <th>
        TITLE
        </th>
        <th>
        SUBTITLE
        </th>
         <th>
        CONTENT
        </th>
         <th>
        DELETE
        </th>
        </tr>
<?php

        
        $querry1 = "SELECT * FROM writee WHERE NAME LIKE '$name' ";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
            $name = $querry3['NAME'];
            $email = $querry3['TITLE'];
            $message = $querry3['SUBTITLE'];
            $messagee = $querry3['CONTENT'];
        
?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $message; ?></td>
            <td><?php echo $messagee; ?></td>
            <td><a href="del.php?id=<?php echo $id;?>" style="text-decoration:none; color:#F4D35E">Delete</a></td>
        </tr>
        <?php }} ?>
      </table>
    </div>
    </body>
</html>
<?php
}
else{
    ?>
    <script>
        window.alert("Please Login");
        location.replace('login.php');
    </script>
    <?php
}
?>