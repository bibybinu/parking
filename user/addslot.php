<?php
session_start();

require "../php/connect.php";

$vtype=$_POST['type'];
$slots=$_POST['capacity'];
$rate=$_POST['rate'];
$id=$_POST['id'];

$sql="INSERT into plotdtl(vtype,capacity,rate,plotid,availability) values('$vtype','$slots','$rate','$id','$slots')";
  //echo $sql;

if(mysqli_query($conn,$sql))
{
   ?>
   <script type="text/javascript">
      alert("details added");
      window.location.href="myplots.php";
  </script>
  <?php
}
else echo "error";
?>
