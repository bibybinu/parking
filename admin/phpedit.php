<?php
 session_start();
require "../php/connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$house=$_POST['house'];
$street=$_POST['street'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$distid=$_POST['district'];


     $c="SELECT * FROM reg WHERE email='$email'";
     $a=mysqli_query($conn,$c);
     $num=mysqli_num_rows($a);
     echo $num;
?>     