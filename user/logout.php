<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="../js/sweetalert2@11.js"></script>
     <title>
          
     </title>
</head>
<body>

	<?php
	session_start();
  $email=$_SESSION['email'];
	

    session_destroy();
    ?>

     <script>
                         Swal.fire({
                icon: 'success',
                           title: 'Logout successfull',
                           text: 'Redirecting!'
               }).then(() => {
                    window.location.href="../index.php";
               })



               </script>

               <?php

?>