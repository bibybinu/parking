<?php
 session_start();
 
require "../php/connect.php";
?>

////////////////////////////////////////////////////////////


<?php
$target_dir = "../uploads/plots/";
$pic=basename($_FILES["plotimg"]["name"]);
$target_file = $target_dir . basename($_FILES["plotimg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["plotimg"]["tmp_name"]);
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
if ($_FILES["plotimg"]["size"] > 5000000) {
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
  if (move_uploaded_file($_FILES["plotimg"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["plotimg"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


  /////////////////////////////////////////////////////



$email=$_SESSION['email'];
$name=$_POST['name'];
$type=$_POST['type'];
$criteria=$_POST['criteria'];
$address=$_POST['address'];
$landmark=$_POST['landmark'];
$city=$_POST['city'];
$link=$_POST['link'];
$distid=$_POST['district'];
$phone=$_POST['phone'];

 $sql="INSERT INTO plot(email,name,type,criteria,address, landmark, city,maplink, distid,contact,plotimg,status) values('$email','$name','$type','$criteria','$address','$landmark','$city','$link','$distid','$phone','$pic','0')";

 //echo $sql;

  if(mysqli_query($conn,$sql))
    {
     ?>
     <script type="text/javascript">
          alert("Plot added");
         window.location.href="plot.php";
     </script>
     <?php
    }
    else echo "error";
    ?>