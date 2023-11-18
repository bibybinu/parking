<?php
require "../../php/connect.php";
 $distid=$_GET['id'];
 //echo $distid;
 $sql="DELETE FROM plot WHERE plot.plotid = '$distid'";
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("Plot Removed");
          window.location.href="../plotlist.php";
     </script>
     <?php
    }
 ?>