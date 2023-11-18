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
  $sql="update vehicle set status=2 where bookid=$id";
  if(mysqli_query($conn,$sql))
  {
      ?>
                 <script>
                         Swal.fire({
                icon: 'success',
                           title: 'Approved',
                           text: 'Redirecting!'
               }).then(() => {
                    window.location.href="approve.php";
               })



               </script>

          <?php 
  }

  ?>
