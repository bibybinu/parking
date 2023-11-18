<?php 
require '../connect.php';
$id=$_POST['distid'];
$sql1="select * from city";
$d1=mysqli_query($conn,$sql1);
while ($row1=mysqli_fetch_assoc($d1)) 
{
?>
<option value="<?php echo $row1['cityid'];?>"><?php echo $row1['city'];?></option>
<?php
}
?>