<?php
session_start();
require "../php/connect.php";
$pass1=$_POST['password'];
$pass2=$_POST['newpassword'];
$mail=$_SESSION['email'];


$sql="select * from login where email='$mail'";
$q=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($q);
	
	if($pass1==$data['password'])

  {
     if($pass1==$pass2)
     { ?>
       <script type="text/javascript">
             alert("Please enter a diffrent Password");
              window.location.href="profile.php";
          </script> <?php
     }

      else
	    {

       $sql2="update login SET  password='$pass2'  WHERE email='$mail'";

       if(mysqli_query($conn,$sql2))
          {
          	 ?>
           <script type="text/javascript">
             alert("Password changed");
             window.location.href="profile.php";
           </script>
             <?php

          }
       }

      } 
    else
     {
           echo "password incorrect";      }       

?>
