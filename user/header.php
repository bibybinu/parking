  <!DOCTYPE html>
  <html lang="en">
  <?php 
  require "../php/connect.php";
  session_start();
  $email=$_SESSION['email'];
  if($email==null)
  {
    echo "error";
    header('location:../index.php');
  }
  $sql="select * from reg where email='$email'";

                   $f=mysqli_query($conn,$sql);
                   $user=mysqli_fetch_assoc($f);

                   $did=$user['distid'];

                   $sql2="select * from district";
                   $d=mysqli_query($conn,$sql2);

                    $sql3="select * from city";
                   $c=mysqli_query($conn,$sql3);
                   
                   
  ?>

  <head>
      
  <script type="text/javascript">
      function validate() {

        if (!(document.pass.renewPassword.value == document.pass.newPassword.value)) {

        document.getElementById('paswrd').innerHTML="*Should be same as Password!";
        return false;
        }
        else {
         return true;
        }

          }
    </script>



    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>USER Dashboard - Parksafe</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

   
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <i class="ri ri-car-fill" style="font-size: 30px;"></i>
          <span class="d-none d-lg-block"> &nbsp;PARK SAFE</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

     <!--  <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div> --><!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

         

         <!--  <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>

            </ul>

          </li> -->


        <!--   <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>David Muldon</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-footer">
                <a href="#">Show all messages</a>
              </li>

            </ul>

          </li> --><!-- End Messages Nav -->
          
          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="<?php echo '../uploads/profile/'.$user['img'];?>" alt="profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">
               <?php echo $user['name'];?> 
                
              </span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php echo $user['name'];?></h6>
                <span>Park Safe</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

               <li>
                <a class="dropdown-item d-flex align-items-center" href="profile.php">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li> 

             <!--  <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li> -->

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Log Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="index.php">
            <i class="bi bi-heart-fill"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

         <li class="nav-item">
          <a class="nav-link collapsed" href="profile.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <!--  <li class="nav-item">
          <a class="nav-link " href="Userlist.php">
            <i class="bi bi-people-fill"></i>
            <span>Userlist</span>
          </a>
        </li> --><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>My Plots</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li>
              <a href="plot.php">
                <i class="bi bi-circle"></i><span>Add Plot</span>
              </a>
            </li>
           <li>
              <a href="myplots.php">
                <i class="bi bi-gear"></i><span>Manage Plots</span>
              </a>
            </li>
             <li>
              <a href="approve.php">
                <i class="bi bi-check-circle"></i><span>pending approval</span>
              </a>
            </li>
             <li>
              <a href="bkdplot.php">
                <i class="bi bi-check-circle"></i><span>Active Booking</span>
              </a>
            </li>
          </ul>
            

           

       

      


        
     

       
<!-- 
        <li class="nav-item">
          <a class="nav-link collapsed" href="">
            <i class="bi bi-question-circle"></i>
            <span>...........</span>
          </a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="complaint.php">
            <i class="bi bi-envelope"></i>
            <span>Complaint</span>
          </a>
        </li><!-- End Contact Page Nav -->
          <li class="nav-item">
          <a class="nav-link collapsed" href="reply.php">
            <i class="bi bi-envelope"></i>
            <span>Replied</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-navi" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>My Booking</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-navi" class="nav-content collapse " data-bs-parent="#sidebar-nav">



                <li class="nav-item">
          <a class="nav-link collapsed" href="active.php">
            <i class="bi bi-hexagon-fill"></i>
            <span>Active</span>
          </a>
        </li>



                <li class="nav-item">
          <a class="nav-link collapsed" href="history.php">
            <i class="bi bi-check-circle"></i>
            <span>Approved</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="pendingbk.php">
            <i class="bi bi-envelope"></i>
            <span>Pending</span>
          </a>
        </li>
      </ul>
    </li>

        

      </ul>

    </aside><!-- End Sidebar-->