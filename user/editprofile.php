<?php
 session_start();
 
require "../php/connect.php";
$email=$_SESSION['email'];

$name=$_POST['name'];
$number=$_POST['number'];
$house=$_POST['house'];
$street=$_POST['street'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$distid=$_POST['district'];


     $sql="update reg SET name='$name',number='$number',house='$house',street='$street',city='$city',pincode='$pincode',distid='$distid'  WHERE email='$email'" ;
    if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("Profile Updated");
          window.location.href="profile.php";
     </script>
     <?php
    }
     echo $sql;
     
    ?> 
