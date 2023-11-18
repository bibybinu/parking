   <?php
    require "header.php";
    $sql="select * from vehicle where bookid=(SELECT MAX(bookid) as bookid from vehicle)";
    $s=mysqli_query($conn,$sql);
    $r=mysqli_fetch_assoc($s);
    $id=$r['plotid'];
    $t=$r['type']; echo $t;
    $sql2="select rate from plotdtl where (plotid='$id' and vtype='$t')";
    
     $s2=mysqli_query($conn,$sql2);
     $r2=mysqli_fetch_assoc($s2);
     

    ?>

      <main id="main" class="main">

      <div class="pagetitle" >
        <h1>Users</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
        <div align=center>      <section class="section"  style="align:center" >
      <div class="col-md-4" style="align:center">


        <div class="card" style="background-color:#fff">
              <div class="card-body">
                <center><div class="card-title">Confirmation</div></center>

                <!-- Multi Columns Form -->
                <form class="row g-3">
                <div class="card-text">Vehicle No: <?php echo $r['vnum'];?></div>
                
               <div class="card-text"> Vehicle Type : <?php if($r['type']=='t')
               { echo 'Two wheeler';}elseif ($r['type']=="f")
               { echo 'Four/Three wheeler';}elseif ($r['type']=='h')
               { echo 'Heavy Vehicle';}

             ?>
               

             </div>
               <div class="card-text"> From <?php echo $r['sdate'];?> [<?php echo $r['timein'];?>] <div class="card-text">To <?php echo $r['edate'];?> [<?php echo $r['timeout'];?>]</div>
                
               <div class="card-text">Time Duration : <?php echo $r['duration'];?> Hours</div>
                
                              Parking Fee : Rs <?php
                $p1=$r['duration'];
                $p2=$r2['rate'];
                $p3=$p1*$p2;


                echo $p3;?></p>

                <a href="bill2.php" class="btn btn-primary">  Book Now</a>
                  
                
                </form><!-- End Multi Columns Form -->
                <div><i></i></div>

               

              </div>
            </div></div>

          </section>  <div class="row">
                    <div class="col-lg-1 offset-1 col-md-4 label"><i class=""></i></div>
                    <div class="col-lg-8 col-md-8" style="color:#red;">**Kindly book on Daytime For Faster Approval**</div>
                  </div></div>






  </main><!-- End #main -->

    <?php
    require "footer.php";
    ?>