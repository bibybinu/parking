

 <?php
 require "header.php";
 $id=$_GET['id'];
 //echo $id;
 ?> 

 //form for district selection





 ////////end of form

 <?php



 $sql1="select * from district";
 $d1=mysqli_query($conn,$sql1);







 $email=$_SESSION['email'];
 $sql="select * from plot where email!='$email' and status='2' and distid='$id'";
 $d=mysqli_query($conn,$sql);

 ?>

 <script type="text/javascript">

  function hai()
  {
    alert("hai");
  }
</script>

<style type="text/css">
.card-title
{
  font-size: 150%;
  font-weight: 600;
}
</style>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <div class="row">
      <div class="col-md-9">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>

      </div>
      <div class="col-md-3 mb-3" style="margin-top: -15px;">
        <form action="index2.php">
          <div class="row">
            <div class="col-md-12">
             <select class="form-select" id="citydrop" onchange="getcity(this.value)">
               <option selected disabled>Select City</option>

               <?php
               while ($row1=mysqli_fetch_assoc($d1)) 
               {
                ?>
                <option value="<?php echo $row1['distid'];?>" name="city"><?php echo $row1['district'];?></option>
                <?php
              }
              ?>



            </select>
          </div>
        


        </div>
      </form>
    </div>
  </div>

</div><!-- End Page Title -->

<section class="section">
  <div class="row ">



       <!--  <div>
            <input type="checkbox" id="button" style="display: none;"  onchange="alert1()">
            <label for="button" class=" ri-heart-3-line"></label>
          </div> -->

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

                  <h3 class="card-title mb-2" style="text-transform: capitalize;"><?php echo $row['name'];?></h3>







                  <div class="row">
                    <div class="col-lg-1 offset-1 col-md-4 label"><i class="bi bi-telephone-fill"></i></div>
                    <div class="col-lg-8 col-md-8"><?php echo $row['contact'];?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-1 offset-1 col-md-4 label"><i class="bi bi-house-door-fill"></i></div>
                    <div class="col-lg-8 col-md-8 label"><?php echo $row['address']."<br>"; echo $row['city'];?></div>
                  </div>


                  <div class="row mb-2">
                    <div class="col-lg-1 offset-1 col-md-6 label"></div>
                    <div style="text-transform: capitalize;" class="col-lg-8 col-md-8"><?php 
                    $em=$row['plotid'];
                    echo $row['landmark'];?></div>
                  </div>

                      <div class="row">
                    <div class="col-lg-1 offset-1 col-md-4 label"><i class="bi bi-info-circle"></i></div>
                    <div class="col-lg-8 col-md-8"><?php echo $row['criteria'];?></div>
                  </div>

                    <div class="row">
                    <div class="col-lg-1 offset-1 col-md-4 label"><i class="bi bi-info-circle-fill"></i></div>
                    <div class="col-lg-8 col-md-8"><?php echo $row['type'];?></div>
                  </div>


                     <!--    <div class="row mb-2">
                          <div class="col-lg-1 offset-1 col-md-4 label"><i class="bi bi-geo-alt-fill"></i></div>
                          <div class="col-lg-4 col-md-8 "><a target="_blank" class="btn btn-info btn-sm" href="<?php echo $row['maplink'];?>">Location</a></div>
                        </div> -->

                      <div class="offset-1 mt-1 mb-0">

                         <?php 
                        $s2=mysqli_query($conn,"select * from plotdtl where plotid='$em'");

                        while($r=mysqli_fetch_assoc($s2))
                        {
                        ?> <h4 class="btn-group">

                          <a class="btn btn-success btn-sm">

                          <?php 
                          $vt=$r['vtype'];
                          //echo $vt;

                            if ($vt=="t") {
                                    

                                      ?> <i class="bi bi-bicycle"></i><?php 

                                  }
                                    


                        
                                if ($vt=="f") {
                                   ?> <i class="bx bxs-car"></i><?php 
                                  
                                }echo " ";
                                if ($r['vtype']=="h") {
                                       ?> <i class="bx bxs-bus-school "></i><?php 
                                }echo " ";


                      ?> </a> </h4>
                      <?php }
                      ?>
                        
                      </div>  
                       





                      <!-- <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                        <div class="btn-group pt-1 offset-1">
                        <a target="_blank" class="btn btn-primary btn-sm" href="<?php echo $row['maplink'];?>"><i class="bi bi-geo-alt-fill"></i> Location</a>
                        <a href="<?php echo 'booking.php?id='.$row['plotid'];?>" class="btn btn-success btn-sm">Book Now</a>  
                      </div>




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


        <script type="text/javascript">
          $(document).ready(function() {
         // alert("Welcome");

         $('#citydrop').val(<?php echo $id;?>);
                  
        });



          function getcity(val) {
         //   alert(val);
            window.location.href="placewise.php?id="+val;
          }
        </script>

