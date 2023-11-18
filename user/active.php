   <?php
   require "header.php";
   $email=$_SESSION['email'];
   $sql="select * from vehicle where email='$email' and status=3";
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
          <div class="card" style="background-color:#fff">
            <div class="card-body">
              <center><div class="card-title"><?php $pi=$row['plotid'];
              $d2=mysqli_query($conn,"select name from plot where plotid='$pi'");
              $d3=mysqli_fetch_assoc($d2);
              


            ?></div></center>

            <!-- Multi Columns Form -->
            <form class="row g-3">

             <p class="card-text">Vehicle No: <?php echo $row['vnum'];?><br>

              Vehicle Type : <?php echo $row['type'];?><br>
              From <?php echo $row['sdate'];?> [<?php echo $row['timein'];?>] <br>To <?php echo $row['edate'];?> [<?php echo $row['timeout'];?>]

              <br>Time Duration : <?php echo $row['duration'];?> Hours<br>

           Rate : <?php   $sql2="select rate from plotdtl where (plotid='$row[plotid]' and vtype='$row[type]')";

              $s2=mysqli_query($conn,$sql2);
              $r2=mysqli_fetch_assoc($s2);
              echo $r2['rate']*$row['duration'] ;
              ?>  



              <!-- <a href="cancel.php?bookid=<?php echo $row['bookid'];?>" >&nbsp &nbsp<button class="btn btn-danger btn-sm"> Reject</button></a> -->



              <div class="row"> <?php

              if($row['status']=="1")
              {
                ?> 
                <div class="col-md-6">                
                  <a  href="cancel.php?bookid=<?php echo $row['bookid'];?>" class="btn btn-primary btn-sm" onclick="{if(confirm('Are you sure?')==false)return false}">Cancel Booking</a>
                </div>
                <div class="col-md-6">
                 <p class="btn btn-outline-warning btn-sm"> <i class="bi bi-info-square-fill"></i>  <?php
                 echo "Pending" ; 
                 ?>
               </p>
             </div> <?php }


           else if($row['status']=="2")
           {
            ?>

            <div class="col-md-6">                
              <button type="button"
              onclick="pay(<?php echo $r2['rate']*$row['duration'] .",".$row['plotid'].",".$row['bookid']; ?>)"
              class="btn btn-primary btn-sm" >Pay 
              <?php 


              echo $r2['rate']*$row['duration'] ;




              ?>
            </button>
          </div>


          <div class="col-md-6">
           <p class="btn btn-outline-success btn-sm"> <i class="bi bi-info-square-fill"></i>  <?php
           echo " Approved" ; 
           ?>
         </p>

       </div>

       <?php
     }
      else if($row['status']=="0")
     {
     ?>  <div class="col-md-12">
       <p class="btn btn-outline-warning btn-sm"> <i class="bi bi-info-square"> </i> <?php

       echo " Rejected due to unavailability" ; 
       ?>
     </p>
   </div>
  <?php } 

  else if($row['status']=="3")
     {
     ?>   <div class="col-md-6">                
                  <a  href="invoice.php?id=<?php echo $row['bookid'];?>&amt=<?php echo $r2['rate']*$row['duration'];?>" class="btn btn-primary btn-sm" >Print Invoice</a>
                </div>
  <?php }

  ?>

  </div>


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