<?php
require '../php/connect.php';
session_start();
$userid=$_SESSION['email'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$priority=$_POST['priority'];
$sql="insert into complaint(userid,subject,description,priority) values('$userid','$subject','$description','$priority')";
echo $sql;
if($a=mysqli_query($conn,$sql))
{
    ?>
    <script type="text/javascript">
        alert("Complaint Registered!!");
        window.location.href="complaint.php";
    </script>
    <?php
}
else 
{
    ?>
    <script type="text/javascript">
        alert("Complaint Not Registered!!");
        // window.location.href="complaint.php";
    </script>
    <?php
}
?>
