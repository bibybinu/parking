<?php
require "../php/connect.php";
 $mail=$_GET['mail'];
 $id=$_GET['id'];
 //echo $mail;
 $sql="delete from plotdtl where pdid='$mail'";
   if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("Details Removed");
          window.location.href="view.php?id=<?php echo $id;?>";
     </script>
     <?php
    }
 ?>