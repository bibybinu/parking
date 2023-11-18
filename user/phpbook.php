<?php
	require "../php/connect.php";
	require "header.php";
$vnum=$_POST['vnum'];
$type=$_POST['type'];
$phone=$_POST['phone'];
$email=$_SESSION['email'];
$sdate=$_POST['sdate'];
$stime=$_POST['stime'];
$edate=$_POST['edate'];
$etime=$_POST['etime'];
$id=$_POST['id'];

//echo $sql;


$ssdate=strtotime($sdate);

$eedate=strtotime($edate);

$diff =$eedate - $ssdate;

$daydiff=$diff/3600;

$timediff=$etime-$stime;

$dura=$daydiff+$timediff;


$sql="INSERT into vehicle(vnum,type,phone,email,sdate,timein,edate,timeout,plotid,status,duration) values('$vnum','$type','$phone','$email','$sdate','$stime','$edate','$etime','$id','-1','$dura')";

// echo $sql;

if (mysqli_query($conn,$sql))
{
   ?>
   <script type="text/javascript">
      alert("details added");
      window.location.href="bill.php";
  </script>
  <?php
}
else echo "error";
?>


