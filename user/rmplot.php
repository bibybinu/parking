<?php

require "../php/connect.php";
$id=$_GET['id'];
	$sql="delete from plot where plotid=$id";


	 echo $sql;

  if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("Plot Removed");
          window.location.href="myplots.php";
     </script>
     <?php
    }
    else echo "error";
   
?>