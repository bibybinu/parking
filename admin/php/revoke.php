<?php
require "../../php/connect.php";
 $mail=$_GET['mail'];
 //echo $mail;
 $sql="update login SET status='1' where email='$mail' ";
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("revoked");
          window.location.href="../userlist.php";
     </script>
     <?php
    }
 ?>