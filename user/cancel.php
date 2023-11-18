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
  require "../php/connect.php";
  $id=$_GET['bookid'];
  echo $id;
  $sql="delete from vehicle where bookid=$id";
  if(mysqli_query($conn,$sql))
  {
      ?>
                 <script>
                         Swal.fire({
                icon: 'success',
                           title: 'Cancellation successfull',
                           text: 'Redirecting!'
               }).then(() => {
                    window.location.href="history.php";
               })



               </script>

          <?php 
  }

  ?>
