<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../js/sweetalert2@11.js"></script>
	<title>
		
	</title>
</head>
<body>



	<?php
session_start();
include "connect.php";
$mail=$_POST['email'];
$pass=$_POST['password'];
//echo $pass,$mail;

$sql="select * from login where email='$mail'";

$q=mysqli_query($conn,$sql);
$num=mysqli_num_rows($q);
//echo $num;
if($num==0)
{
	?>
	<script type="text/javascript">
			

			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'User Not Found!'
			}).then(() => {
				window.location.href="../index.php";
			})




	</script>
<?php
}
	
else
{
	$data=mysqli_fetch_assoc($q);
	//echo $data['password'];
	$p=$data['password'];
	if($pass==$p)
	{ 
			
		if($data['type']==1)//admin
		{
			$_SESSION['email']=	$mail;
			?>
			<script type="text/javascript">
				/*window.location.href="../admin/base.php";*/


					Swal.fire({
					  icon: 'success',
					  title: 'Login successfull',
					  text: 'Redirecting!'
					}).then(() => {
						window.location.href="../admin/base.php";
					})


			</script>
	     <?php

		}
		else if($data['type']==2)
		{
			$_SESSION['email']=	$mail;
			?>
				<script type="text/javascript">

						Swal.fire({
					  icon: 'success',
					  title: 'Login successfull',
					  text: 'Redirecting!'
					}).then(() => {
					window.location.href="../user/index.php";
					})
					
				</script>
	     	<?php

		}
		else if($data['type']==3)
		{
			$_SESSION['email']=	$mail;
			?>
				<script type="text/javascript">
					window.location.href="../vol/index.php";
				</script>
	     	<?php

		}

	}
	else
	{
	?>
		<script type="text/javascript">
			alert("credentials incorrect");
			window.location.href="../index.php";
			
		</script>
	<?php
	}


}



?>



<!-- 
	<script type="text/javascript">
		Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
	</script> -->
	

</body>
</html>










