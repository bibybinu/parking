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
    $id=$_GET['bkid'];
    $amt=$_GET['amt'];

    
  $sql="update vehicle set status=3 where bookid='$id'";
 
   if(mysqli_query($conn,$sql))
   { echo "sucess";
      ?>
                <script>
                               Swal.fire({
                 icon: 'success',
                       title: 'Payment successfull',
                            text: 'Redirecting!'
               }).then(() => {
                    window.location.href="invoice.php?id=<?php echo $id; ?>&amt=<?php echo $amt; ?>";
               })


                </script>

           <?php 
   }

  ?>
