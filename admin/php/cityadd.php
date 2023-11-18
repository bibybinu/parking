<?php
require "../../php/connect.php";
$district=$_POST['distid'];
$city=$_POST['city'];

$s=mysqli_query($conn,"select * from city where city='$city'");
$n=mysqli_num_rows($s);
if($n==0)
{
 $sql="insert into city(distid,city) values('$district','$city')";
 //echo $sql;
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("City Added");
          window.location.href="../city.php";
     </script>
     <?php
    }
  }
    else
    {
     ?>
     <script type="text/javascript">
          alert("City Already Added");
          window.location.href="../city.php";
     </script>
     <?php
    } 
 ?>