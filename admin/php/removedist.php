<?php
require "../../php/connect.php";
 $distid=$_GET['id'];
 //echo $distid;
 $sql="DELETE FROM district WHERE district.distid = '$distid'";
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("District Removed");
          window.location.href="../district.php";
     </script>
     <?php
    }
 ?>