
<?php
require("../php/connect.php");
require ('header.php');


$email=$_SESSION['email'];
$s123="select * from vehicle where plotid in(select plotid from plot where email='$email')  and status=1";

$q=mysqli_query($conn,$s123);
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Active</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Active</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Booking Details</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">plot name</th>
                  <th scope="col">Vehicle No</th>
                  <th scope="col">email</th>
                  <th scope="col">Phone</th>
                  
                  
                  <th scope="col">Start date</th><th scope="col">Start time</th>
                  <th scope="col">End Date</th><th scope="col">End time</th>
                  <th scope="col">Duration</th>
                  
                 
                </tr>
              </thead>
              <tbody>
                <?php
               // echo $s123;
                $n=1;
                while($x=mysqli_fetch_assoc($q))
                {
                  ?>


                  <tr>
                    <th scope="row"><?php $pi=$x['plotid'];
                                                 $d2=mysqli_query($conn,"select name from plot where plotid='$pi'");
                                                 $d3=mysqli_fetch_assoc($d2);
                                                 echo $d3['name']; ?></th>
                    <td><?php echo $x['vnum'];?></td>
                    <td><?php echo $x['email'];?></td>
                    <td><?php echo $x['phone'];?></td>
                    <td><?php echo $x['sdate'];?></td>
                    <td><?php echo $x['timein'];?></td>
                    
                    <td><?php echo $x['edate'];?></td>
                    <td><?php echo $x['timeout'];?></td>
                    <td><?php echo $x['duration'];?></td>
                
                    <td>
                      
                      <a href=bookaccept.php?bookid=<?php echo $x['bookid']?> onclick="{if(confirm('Are you sure?')==false)return false}"button class="btn btn-primary btn-sm"> Accept</button>&nbsp;
                      <a href=bookreject.php?bookid=<?php echo $x['bookid']?> onclick="{if(confirm('Are you sure?')==false)return false}">&nbsp &nbsp<button class="btn btn-danger btn-sm"> Reject</button></a><td>

                      </tr>
                      <?php

                    }

                    ?>

                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

    </main><!-- End #main -->
    <?php
    require ('footer.php');
    ?>

