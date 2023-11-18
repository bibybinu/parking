<?php

require("../php/connect.php");
require ('header.php');
$email=$_SESSION['email'];
$s123="select * from vehicle where plotid in(select plotid from plot where email='$email')  and status=3";

$q=mysqli_query($conn,$s123);

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
       while($row=mysqli_fetch_assoc($q))
       {

        ?> 

        <div class="col-md-4">
<div class="card" style="background-color:#fff">
              <div class="card-body">
                <center><div class="card-title"><?php $pi=$row['plotid'];
                                                 $d2=mysqli_query($conn,"select name from plot where plotid='$pi'");
                                                 $d3=mysqli_fetch_assoc($d2);
                                                 echo $d3['name'];?></div></center>

                <!-- Multi Columns Form -->
                <form class="row g-3">
                  
                                   <p class="card-text">Email: <?php echo $row['email'];?><br>
                                    Vehicle No: <?php echo $row['vnum'];?><br>
                
                Vehicle Type : <?php 



               
                          $vt=$row['type'];
                          //echo $vt;

                            if ($vt=="t") {
                                    

                                   echo "Two Wheeler"; 

                                  }
                                    


                        
                                if ($vt=="f") {
                                  echo "Four/Three Wheeler"; 
                                  
                                }echo " ";
                                if ($vt=="h") {
                                      echo "Heavy Vehicle"; 
                                }echo " ";


                      ?><br>
                From <?php echo $row['sdate'];?> [<?php echo $row['timein'];?>] <br>To <?php echo $row['edate'];?> [<?php echo $row['timeout'];?>]
                
               <br>Time Duration : <?php echo $row['duration'];?> Hours<br>
                
                 

              <!--   <a href=cancel.php?bookid=<?php echo $row['bookid']?> onclick="{if(confirm('Are you sure?')==false)return false}">&nbsp &nbsp<button class="btn btn-danger btn-sm"> Reject</button></a> -->

               <div>  </div>
                  
                
                </form><!-- End Multi Columns Form -->
                <div><i></i></div>

               

              </div>
            </div>
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