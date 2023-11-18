<?php
session_start();
require "connect.php";

/////////////////////////////
$target_dir = "../uploads/profile/";
$pic=basename($_FILES["img"]["name"]);
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["img"]["size"] > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


/////////////////////////////




$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$house=$_POST['house'];
$street=$_POST['street'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$distid=$_POST['district'];
$pass=$_POST['password'];


     $c="SELECT * FROM reg WHERE email='$email'";
     $a=mysqli_query($conn,$c);
     $num=mysqli_num_rows($a);
     //echo $num;

if($num>0)
{
     ?>
     <script>
          alert("Email already found pls try login!");
          window.location.href="../index.php";
     </script>

     <?php
}
else
{
     $sql="INSERT INTO reg(name, email, number, house, street, pincode, city, distid,img)values('$name','$email','$number','$house','$street','$pincode','$city','$distid','$pic')";
     //echo $sql;
     if(mysqli_query($conn,$sql))
     {
           $logsql="INSERT INTO login(email,password)values('$email','$pass')";
           if(mysqli_query($conn,$logsql))
          {
               ?>
               <script>
                    alert("Registration success");
                    window.location.href="../user/index.php";
               </script>

               <?php 
                
          }
          else
          {
               echo "login error";
          }
     }
     else
     {
          ?>
               <script>
                    alert("Error Occoured");
                    window.location.href="../index.php";
               </script>

          <?php 
     }
    

}



?>