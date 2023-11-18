 <?php
  require "header.php";
  ?>

   //form for district selection





////////end of form

<?php

  $email=$_SESSION['email'];
  $sql="select * from plot where email!='$email' and status='2'";
  $d=mysqli_query($conn,$sql);
  ?>

  <style type="text/css">
    .card-title
    {
      font-size: 150%;
      font-weight: 600;
    }
  </style>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row ">

       <?php

       $n=1;
       while($row=mysqli_fetch_assoc($d))
       {

        ?> 

        
        <div class="col-md-4">

                    <div class="card mb-3">


                     <div class="col-md-4">
                      <img src="<?php echo '../uploads/plots/'.$row['plotimg'];?>" alt="Profile" class="" style="width: auto;height: 220px;">
                    </div>
                    <!-- Card with an image on left -->


                    <div class="row g-0">





                      <div class="card-body">

                        <h3 class="card-title"><?php echo $row['name'];?></h3>


                        <div class="row">
                          <div class="col-lg-4 col-md-4 label ">Plot ID</div>
                          <div class="col-lg-8 col-md-8"><?php echo $row['plotid'];?></div>
                        </div>





                        <div class="row">
                          <div class="col-lg-4 col-md-4 label">Phone</div>
                          <div class="col-lg-8 col-md-8"><?php echo $row['contact'];?></div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4 col-md-4 label">Address</div>
                          <div class="col-lg-8 col-md-8"><?php echo $row['address']."<br>"; echo $row['city']."<br>";?></div>
                        </div>








                        <!-- <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                        <a href="<?php echo 'bookingview.php?id='.$row['plotid'];?>" class="btn btn-primary btn-sm">View details</a>



                      </div> 
                    </div>
                  </div>
        </div><!-- End Card with an image on left -->

              



              <?php

            }
            ?> 





             <!--  <div class="col-lg-6">

               
                <div class="card">
                  <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                  <div class="card-img-overlay" style="padding-top: 100px;">
                    <h5 class="card-title">Card with an image overlay</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div> -->







            </div>


        </section>




      </main><!-- End #main -->

      <?php

      require "footer.php";
    ?>