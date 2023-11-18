<?php
require "../../php/connect.php";
 $mail=$_GET['mail'];
 //echo $mail;
 $sql="update login SET status='0' where email='$mail' ";
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("User suspended");
          window.location.href="../userlist.php";
     </script>
     <?php
    }
 ?>