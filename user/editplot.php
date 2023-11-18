<?php
 require "../php/connect.php";

 $name=$_POST['name'];
 $number=$_POST['number'];
 $id=$_POST['id'];


 $sql="update plot set name='$name',contact='$number' WHERE plotid='$id' ";
 

 if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("Plot details Updated");
          window.location.href="view.php";
     </script>
     <?php
    }

?>