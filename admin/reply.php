<?php
require '../php/connect.php';
$cid=$_POST['complaintid'];
echo $cid;
$reply=$_POST['reply'];
echo $reply;        
$sql="update complaint set reply='$reply',status=1 where complaintid='$cid'";
echo $sql;
if($a=mysqli_query($conn,$sql))
{ ?>
<script>
 window.location.href='viewcmplnt.php';
</script>
<?php }
else
echo $sql;
?> 