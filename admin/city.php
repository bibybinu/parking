<?php
require "header.php";
$s=mysqli_query($conn,"select * from district;");
$s1=mysqli_query($conn,"select * from city,district where district.distid=city.distid;");
?>
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Place Management</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">District List</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="row">
                <div class="col-lg-8">

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">District</h5>


                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                          <thead>
                            <tr>
                              <th class="col-3">#</th>
                              <th class="col-5">City</th>
                              <th class="col-5">District</th>


                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $n=1;
                            while($row1=mysqli_fetch_assoc($s1))
                            {
                              



                              ?>

                              <tr>
                                <th scope="row"><?php echo $n++;?></th>
                                <td><?php echo $row1['city'];?></td>
                                <td><?php  echo $row1['district'];?>


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

                <div class="col-md-4 ">
                    
                          <div class="card mb-3">
                          <div class="row g-0">
                           <div class="card-body">   
                        <form action="php/cityadd.php" method="post">
                            <div class="row mb-3">
                              <label for="name" class="card-title" style="text-align: center;">Add a City</label>
                              <div class="col-md-8 col-lg-12">
                                <select name=distid class="form-select">
                                    <option disabled="" selected=""> Select District</option>

                                    <?php 
                                        $n=1;
                                        while($row=mysqli_fetch_assoc($s))
                                        {
                                          $id=$row['distid'];



                                          ?>

                                          <option value='<?php echo $row['distid'] ; ?>'><?php echo $row['district'] ?></option>
                                          <?php 
                                        }

                                        ?>
                                </select>
                              </div>
                            </div>

                            <div class="row mb-3">
                              
                              <div class="col-md-8 col-lg-12">
                                <input type="text" name="city" class="form-control" placeholder="City Name" required="">
                              </div>
                            </div>

                             <div class="text-center">
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        </div>
                      </div></div>
                </div>
            </div>
           
        </section>

    </main><!-- End #main -->

<?php
require "footer.php";
?>