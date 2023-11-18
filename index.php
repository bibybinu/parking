	 <?php
	 session_start();
	                 require "php/connect.php";
	                 $sql="select * from district";
	                 $d=mysqli_query($conn,$sql);
	                 $num=mysqli_num_rows($d);

	                
	                 
	                // echo $num;
	                 ?>



	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Park SAFE</title>
		
		
		<script type="application/x-javascript">
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>

	  <style type="text/css">
	  	.red{
	  		color: orangered;
	  		text-shadow: 1px 1px black;
	  	}
	  </style>

		<script type="text/javascript">
			function validate() {
				var format=/  /;
				var alpha=/^[A-Za-z]+$/;
				var psd=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

				var phone=/^[6-9][0-9]{9}/;
				var numbers = /^[0-9]{6}$/;
				var ch=0;

				
	      
				if(document.reg.district.value=="null"){
					document.getElementById('dist').innerHTML="*Select a District!";
				}
				else {
					document.getElementById('dist').innerHTML="";
					ch++;
				}
				
				if(!document.reg.password1.value.match(psd)){
					document.getElementById('pwd').innerHTML="*Password should contain 8-15 characters atleast one lowercase letter,one uppercase letter,one numeric digit and one special character!";
					return false;
				}
				else {
					document.getElementById('pwd').innerHTML="";
					ch++;
				} 
				


				if (!(document.reg.password2.value == document.reg.password1.value)) {

				document.getElementById('paswrd').innerHTML="*Should be same as Password!";
				return false;
				}
				else {
					document.getElementById('paswrd').innerHTML="";

					ch++;
				}

				if (document.reg.brand2.checked == false ) {
				alert("Pls accept to our terms and conditions");
				
				return false;}
	      else{
	      	ch++;
	      }
			 if (ch==4)
			 	return true;
				else
					return false;
			}
		</script>






		<!--// Meta tag Keywords -->

		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
		<!-- css files -->
		<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
		<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
		<link rel="icon" href="images/car.ico">
		<!-- //css files -->

		<!-- web-fonts -->
		<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
		<!-- //web-fonts -->
		
	</head>

	<body>

	<!--/banner-->
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				
				 <div class="col-md-4 col-sm-6 log-icons mt-2">
					<p class="py-2"><!-- <i class="fas fa-phone"></i> info : +91 7510 969 069 --></p>
				</div> 
				
				<div class="col-md-4 col-sm-6 logo">
					<a class="navbar-brand" href="index.php"><span class="fas fa-car"></span>Park Safe</a>
				</div>
			
				
				<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
					<span>
						<a href="#" data-toggle="modal" data-target="#exampleModal1" >
							<i class="fas fa-user"></i> Register</a>
					</span>
				</div>
			</div>
		</div>

		<div class="banner" id="home">
			<!-- header -->
			<header>
				<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
					<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					    aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item active">
								<a class="nav-link ml-lg-0" href="index.html">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="services.html">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="booking.html">Booking</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Dropdown
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item text-center" href="about.html">About</a>
									<a class="dropdown-item text-center" href="services.html">Services</a>

								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
						</ul>

					</div>
				</nav> -->
			</header>
			<!-- //header -->
			<!-- banner-text -->
			<div id="wrapper">

				<!-- Slideshow 1 -->
				<div class="rslides_container">
					<ul class="rslides" id="slider1">
						<li>
							<div class="banner-img">
								<div class="bs-slider-overlay">
									<div class="banner-info text-center">
										<span class="fas fa-taxi"></span>
										<h1>Safe and secure Parking Service </h1>
										<h2 class="mb-5"><i class="fas fa-phone"></i> 7510 969 069</h2>
										<!-- <a href="booking.html">Book Now </a> -->
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-img one">
								<div class="bs-slider-overlay">
									<div class="banner-info text-center">
										<span class="fas fa-taxi"></span>
										<h4>Online Booking</h4>
										<h5 class="mb-5">No Extra Charges</h5>
										<!-- <a href="booking.html">Book Now </a> -->
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-img two">
								<div class="bs-slider-overlay">
									<div class="banner-info text-center">
										<span class="fas fa-taxi"></span>
										<h4>Park Your car</h4>
										<h5 class="mb-5">In trusted locations </h5>
										<!-- <a href="booking.html">Book Now </a> -->
									</div>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- //banner -->

		
	<!-- about -->
	<section class="about py-5">
		<div class="container py-lg-5 py-3">
			<h3 class="heading text-capitalize text-center">Welcome</h3>
			<h5 class="heading mb-5 text-center">Your Parking Space</h5>
			<div class="about-head text-center ">
				<div class="row about-grids-top mb-5">
					<div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
						<i class="fas fa-money-bill-alt" aria-hidden="true"></i>
						<h4>Low Charges</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h4>Safe & Secure</h4>
					</div>
				
					<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
						<i class="fa fa-taxi" aria-hidden="true"></i>
						<h4>City wide</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
						<i class="fa fa-cogs" aria-hidden="true"></i>
						<h4>best Service</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
						<i class="fa fa-smile" aria-hidden="true"></i>
						<h4>Happy Customers</h4>
					</div>
				</div>
				<div class="row about-grids-bottom text-left">
					<div class="col-md-4 mb-md-0 mb-5 about-bottom-grid">
						<h4 class="mb-4">we offer convenient parking spaces , near almost every locations in the city,</h4>
						<a href="about.html"> More About Us</a>	
					</div>
					<div class="col-md-4 about-bottom-grid">
						<p>when ever you come to cities you find filled parking lots in malls theatres and shopping complexes
						it is so difficult for you to find a suitable space for parking  imagine how much
						peace of mind  you will have if you leave car in sideways </p>
					</div>
					<div class="col-md-4 about-bottom-grid">
						<p>PARK SAFE lets you to choose convenient parking lots near your locations . we have 
						a range of parking lots with trusted land owners </p>
					</div>
				</div>
			</div>
					
		</div>
	</section>
	<!-- //about -->

	<!-- Why  -->
	<section class="why">
		<div class="container-fluid p-md-5 p-3">
			<h3 class="heading text-capitalize text-center">Why park Safe</h3><br>
			
			<div class="row why-grids">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="py-5 px-2 mb-4 grid1 text-center">
						<h4 class="mx-auto"><span>1</span></h4>
						<p class="mt-5">Best Places</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="py-5 px-2 mb-4 grid2 text-center">
						<h4 class="mx-auto"><span>2</span></h4>
						<p class="mt-5">Safety Assured</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="py-5 px-2 mb-4 grid3 text-center">
						<h4 class="mx-auto"><span>3</span></h4>
						<p class="mt-5">Reasonable Rating</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="py-5 px-2 mb-4 grid4 text-center">
						<h4 class="mx-auto"><span>4</span></h4>
						<p class="mt-5">Fast And Secure</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- //-->

	<!-- team -->

	<!-- //team -->


	<!-- //Our prices -->

	<!--/testimonials-->

		
	<!--footer-->
	<footer class="py-sm-5 py-4 px-md-5 px-3">
		<div class="container-fluid pt-lg-5">
			<div class="row">
				
				<div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 footer-grid-agileits-w3ls1 text-left">
					<h3 class="mb-sm-5 mb-4">Locate Us</h3>	
					<ul class="w3ls-footer-bottom-list">
						<li> <span class="fas fa-map-marker"></span>peeliyanickal building<span> Thodupuzha,Idukki</span></li>
						<li> <span class="fas fa-envelope"></span> <a href="mailto:name@example.com"> parksafe@gmail.com</a> </li>
						<li> <span class="fas fa-phone"></span> +112 367 896 2449 </li>
						<li> <span class="fas fa-fax"></span> +112 367 896 2449 </li>
						<li> <span class="fas fa-globe"></span> <a href="#"> www.parksafe.com</a> </li>
						<li> <span class="fas fa-clock"></span> Office Time  : 8:00 a.m - 6:00 p.m</li>
					</ul>
				</div>
			
				<!-- subscribe -->
				<!-- <div class="col-lg-3 col-sm-6 subscribe-main footer-grid-agileits-w3ls text-left">
					<h3 class="mb-sm-5 mb-4">Newsletter</h3>
					<div class="subscribe-main text-left">
						<div class="subscribe-form">
							<form action="#" method="post" class="subscribe_form">
								<input class="form-control" type="email" placeholder="Enter Your Email..." required="">
								<button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
							</form>
					   </div>
					</div> -->
					<!-- //subscribe -->
					<div class="footer-social">
					<div class="copyrighttop">
					<h3 class="mb-sm-5 mb-4">Stay In Touch</h3>
						<!-- <ul>
							<li class="mr-1">
								<a class="facebook" href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="mr-1">
								<a class="facebook" href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="mr-1">
								<a class="facebook" href="#">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<li class="mr-1">
								<a class="facebook" href="#">
									<i class="fab fa-pinterest-p"></i>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
 -->
					</div>
				</div>
				</div>
			</div>
			<!-- copyright -->
			<div class="footer-cpy text-center pt-sm-5 mt-sm-5 mt-4 pt-3">
				<div class="w3layouts-agile-copyrightbottom">
					<p>© 2021 Park Safe. All Rights Reserved 
					</p>

				</div>
			</div>
			<!-- //copyright -->
		</div>
	</footer>
	<!-- //footer -->
				
	<!-- login and register modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Sign In to your account</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="php/login.php" method="post">
						
							<div class="form-group">
							<label for="email" class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" id="email"pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" title="valid email only" id="email"  required="">
						</div>

						<div class="form-group">
							<label for="password" class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" id="password" required="">
							<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
						</div>

					<!--	<div class="form-group">
				<label for="usertype" class="col-form-label">User Type</label>
							<select id="usertype" name="usertype" class="form-control">
								<option value="a">Admin</option>
								<option value="l">Land owner</option>
								<option value="c">Client</option>
							</select>
							</div>	-->

						<!--<div class="row sub-w3l my-3">
							<div class="col sub-agile">
								<input type="checkbox" id="brand1" value="">
								<label for="brand1" class="text-white">
									<span></span>Remember me?</label> 
							</div>
							<div class="col forgot-w3l text-right">
								<a href="#" class="text-white">Forgot Password?</a>
							</div>-->
						</div>
						
							<div class="right-w3l">
						<input type="submit" class="form-control" value="Sign In">
					</div>
						
						<p class="text-center dont-do text-white mt-5">Don't have an account?
						<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white" style=" ">
							<u>Register Now</u></a>
					</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Register your account</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="php/phpreg.php" method="post" name="reg" onsubmit="return validate()" enctype="multipart/form-data">



						<div class="form-group">
							<label for="name" class="col-form-label">User Name</label>
							<input type="varchar" class="form-control" pattern="[A-Za-z \.]+" title="no digits or symbols" placeholder="User Name" name="name" id="name"  required="" >
							<span class="txt3 p-b-2 error" id="fname"></span>
						</div>
						<div class="form-group">
							<label for="num" class="col-form-label">Phone number</label>
							<input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Phone number" name="number" pattern="^[6-9]\d*$" title="enter a valid phonenumber" id="num" required="">
						</div>
							
						<div class="form-group">
							<label for="email" class="col-form-label">Email</label>
							<input type="text" class="form-control" placeholder="Email" name="email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" title="valid email only" id="email" required="">
							<span class="red" id="eml"></span>
						</div>
						<div class="form-group"><br><b>ADDRESS:</b><br><br>

							<label for="housename" class="col-form-label">house name</label>
							<input type="text" class="form-control" name="house" id="housename" placeholder="house name"  required="">

								<label for="streetname" class="col-form-label">street name</label>
							<input type="varchar" class="form-control" name="street" id="streetname" placeholder="street name" pattern="[A-Za-z]+" title="only alphabets" required="">

								<label for="pin" class="col-form-label">pincode</label>
							<input type="text" class="form-control" name="pincode" id="pin" placeholder="pincode" pattern="^[1-9]{6}" title="combination of exact 6 digits must not start with zero" maxlength="6" required="">

								

								<label for="district" class="col-form-label">district</label>

								  <select name="district" id="district" class="form-control" required ((((onchange="getdata(this.value)"))))>

	                                        <option value="" selected="" disabled="">Select your district</option>
	                                        <?php 
	                                        	while ($row=mysqli_fetch_assoc($d)) 
	                                        	{
	                                        		?>
	                                        		<option value="<?php echo $row['distid'];?>">
	                                        			<?php echo $row['district'];?></option>

	                                        		<?php


	                                        	}


	                                        ?>

	                                    
	                                        

	                                    </select> 
	                                    <span class="red" id="dist"></span>


										<label for="city" class="col-form-label">City</label>

										<input type="text" class="form-control" name="city" id="city" placeholder="City" pattern="[A-Za-z]+" title="only alphabets" required="">

										<!--     <select name="city"  class="form-control" required id="cityq">

			                                        <option value="" selected="" disabled="">Select your City</option>
			                                       
			                                        

			                                    
			                                        

			                                </select> 
 -->

							</div><br><br>


                           <div class="form-group">
                  <label for="img"  class="col-form-label">Profile Image</label>
                  <input type="file" name="img" class="form-control" id="img" required="">
                </div>
							
							
						<div class="form-group">
							<label for="password1" class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" id="password1"
							 
	                         title="Password should contain 8 or more characters, atleast one lowercase letter,one uppercase letter,one numeric digit and one special character!"
							   required="">
							<span toggle="#password1" class="red" id="pwd"></span>
						</div>
						<div class="form-group">
							<label for="password2" class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							<span class="red" id="paswrd"></span>
						</div>
						<div class="sub-w3l">
							<div class="sub-agile">
								<input type="checkbox" id="brand2" value="">
								<label for="brand2" class="mb-3">
									<span></span>I Accept to the Terms & Conditions</label>
							</div>
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login and register modal -->

	<!-- js-scripts -->		

		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
		
		<!-- carousel -->
		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 1,
							nav: false
						},
						900: {
							items: 2,
							nav: false
						},
						1000: {
							items: 3,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>
		<!-- //carousel -->

		<!--slider-->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			$(function () {
				// Slideshow 1
				$("#slider1").responsiveSlides({
					auto: true,
					pager: true,
					nav: true,
					speed: 500,
					namespace: "centered-btns"
				});
			});
		</script>
		<!--//slider-->

		<!-- start-smoth-scrolling -->
		<script src="js/SmoothScroll.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				// alert("Welcome");
									
				});


			function getdata(distid){

				$.post('php/ajax/getcity.php',{distid:distid},function(response)
	        {
	          $("#cityq").html(response); 
	         alert(response);
	          
	        });
			//alert(distid);
	      }
		</script>
		<!-- //here ends scrolling icon -->
		<!-- start-smoth-scrolling -->
		
	<!-- //js-scripts -->

	</body>
	</html>