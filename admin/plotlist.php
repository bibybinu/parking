<?php
require "header.php";
 $sql="select * from plot,district where plot.distid=district.distid and plot.status=1;";
  $d=mysqli_query($conn,$sql);

  $sql2="select * from plot,district where plot.distid=district.distid and plot.status=2;";
  $e=mysqli_query($conn,$sql2);
  ?>
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Plots</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Plots</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
      <div class="row">
        <div class="col-lg-12">


          
            <div class="card-body">
             <!--  <h5 class="card-title">Datatables</h5> -->
             

              <!-- Table with stripped rows -->
              <table class="table table datatable ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                   
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Type </th>
                    
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                    <th scope="col">Landmark</th>
                    <th scope="col">Maplink</th>
                    <th scope="col">Action</th>


                  </tr>
                </thead>
                <tbody>
                  <?php

                    $n=1;
                    while($row=mysqli_fetch_assoc($d))
                    {
                      $mail=$row['email'];
                      ?>
                    
                  <tr>

                    <th scope="row"><?php echo $n++;?></th>
                    
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['district'];?></td>
                    <td><?php echo $row['landmark'];?></td>
                    <td><a target="_blank" class="btn btn-info btn-sm" href="<?php echo $row['maplink'];?>">Location</a></td>
                    
                    <td>
                     <a href="php/approveplot.php?id=<?php echo $row['plotid'] ;?>"  class="btn btn-success btn-sm">Approve</a>

                     
                    </td>

                  </tr>
                  <?php

                  }
                  ?>                 
               
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>



                        <div class="card-body">
              <h5 class="card-title">Approved plots</h5> 
             

              <!-- Table with stripped rows -->
              <table class="table table datatable ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                   
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Type </th>
                    
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                    <th scope="col">Landmark</th>
                    <th scope="col">Maplink</th>
                    <th scope="col">Action</th>


                  </tr>
                </thead>
                <tbody>
                  <?php

                    $n=1;
                    while($row2=mysqli_fetch_assoc($e))
                    {
                      $mail=$row2['email'];
                      ?>
                    
                  <tr>

                    <th scope="row"><?php echo $n++;?></th>
                    
                    <td><?php echo $row2['name'];?></td>
                    <td><?php echo $row2['email'];?></td>
                    <td><?php echo $row2['contact'];?></td>
                    <td><?php echo $row2['type'];?></td>
                    <td><?php echo $row2['address'];?></td>
                    <td><?php echo $row2['city'];?></td>
                    <td><?php echo $row2['district'];?></td>
                    <td><?php echo $row2['landmark'];?></td>
                    <td><a target="_blank" class="btn btn-info btn-sm" href="<?php echo $row2['maplink'];?>">Location</a></td>
                    
                    <td>
                     <a href="php/removeplot.php?id=<?php echo $row2['plotid'] ;?>"  class="btn btn-danger btn-sm">Remove</a>

                     
                    </td>

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
    </section>

    </main><!-- End #main -->

<?php

require "footer.php";
?>