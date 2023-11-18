<?php
require "../../php/connect.php";
$district=$_POST['district'];

$s=mysqli_query($conn,"select * from district where district='$district'");
$n=mysqli_num_rows($s);
if($n==0)
{
 $sql="insert into district(district) values('$district')";
 echo $sql;
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("District Added");
          window.location.href="../district.php";
     </script>
     <?php
    }
  }
    else
    {
     ?>
     <script type="text/javascript">
          alert("District Already Added");
          window.location.href="../district.php";
     </script>
     <?php
    } 
 ?>