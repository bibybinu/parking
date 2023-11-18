

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
  $email=$_SESSION['email'];
	

    session_destroy();
    ?>

     <script>
                         Swal.fire({
                icon: 'success',
                           title: 'Logout successfull',
                           text: 'Redirecting!'
               }).then(() => {
                    window.location.href="../index.php";
               })



               </script>

               <?php

?>









<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<title>
		
	</title>
</head>
<body>
	<script type="text/javascript">
		

		let timerInterval
Swal.fire({
  title: 'Signing out!!',
  html: 'Redirecting in <b></b> milliseconds.',
  timer: 1500,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
 	window.location.href="../index.php";
})



	</script>
	
</body>
</html> -->