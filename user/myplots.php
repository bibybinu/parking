   <?php
  require "header.php";
  $email=$_SESSION['email'];
  $sql="select * from plot where email='$email'";
  $d=mysqli_query($conn,$sql);
  ?>
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
      <div class="row align-items-top">

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

                      
                        
                        


                        <h5 class="card-title"><?php echo $row['name'];?></h5>
                        

                          <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Plot ID</div>
                            <div class="col-lg-9 col-md-8"><?php echo $row['plotid'];?></div>
                          </div>

                         



                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">Phone</div>
                            <div class="col-lg-9 col-md-8"><?php echo $row['contact'];?></div>
                          </div>







                          <!-- <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          <a href="<?php echo 'view.php?id='.$row['plotid'];?>" class="btn btn-primary btn-sm">Manage details</a>
                           <a class="btn btn-danger btn-sm" href="<?php echo 'rmplot.php?id='.$row['plotid'];?>">Remove Plot</a>


                           <br><br>   <?php   if( ( $row['status'])==0)
                                  {
                                    ?>
                                    <font color="red">...Complete  Details...</font>
                                    <?php
                                  }


                             if( ( $row['status'])==1)
                                  {
                                    ?>
                                    <font color="blue">...Pending  Approval ...</font>
                                    <?php
                                  }

                              if( ( $row['status'])==2)
                                  {
                                    ?>
                                    <font color="green">
                                     <i class="bi bi-check-circle"></i>...Approved by Admin ...</font>
                                    <?php
                                  }     


                        ?>
                            <br>

                        
                       
                    </div>
                  </div>
                </div><!-- End Card with an image on left -->

              </div>



              <?php

            }
            ?> 




            





            </div>

          </div>
        </section>




      </main><!-- End #main -->

      <?php

      require "footer.php";
    ?>