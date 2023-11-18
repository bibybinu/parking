

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
  $maxx=mysqli_query($conn,"SELECT MAX(bookid) as bookid from vehicle");
  $arr=mysqli_fetch_assoc($maxx);

  $bookid=$arr['bookid'];

  $sql="update vehicle set status=1 where bookid=$bookid";
  echo $sql;
  if(mysqli_query($conn,$sql))
  {
      ?>
               <script>
                              Swal.fire({
                icon: 'success',
                           title: 'Booking successfull',
                           text: 'Redirecting!'
               }).then(() => {
                    window.location.href="pendingbk.php";
               })


               </script>

          <?php 
  }
  else
  {
     echo "Error";
  }

  ?>
