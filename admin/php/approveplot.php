<?php
require "../../php/connect.php";

 $sql="update plot SET status='2' where plotid='$_GET[id]' ";
 echo $sql;
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("Approved");
          window.location.href="../plotlist.php";
     </script>
     <?php
    }
 ?>




