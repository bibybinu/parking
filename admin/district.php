<?php
require "header.php";
$s=mysqli_query($conn,"select * from district;");
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
                      <th class="col-9">District</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $n=1;
                    while($row=mysqli_fetch_assoc($s))
                    {
                      $id=$row['distid'];



                      ?>

                      <tr>
                        <th scope="row"><?php echo $n++;?></th>
                        <td><?php echo $row['district'];?></td>



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

          <div class="col-md-4">
                          <div class="card mb-3">
                          <div class="row g-0">
                           <div class="card-body">   
                <form action="php/distadd.php" method="post">
                   <div class="row mb-3">
                              <label for="name" class="card-title" style="text-align: center;">Add a District</label>
                              <div class="col-md-8 col-lg-12">
                                <input type="varchar" class="form-control" pattern="[A-Za-z \.]+" title="no digits or symbols" placeholder="District Name" name="district" id="name"  required="" >
                              </div>
                            </div>

                             <div class="text-center">
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </form>
                        </div>
                      </div></div></div>
        </div>
       
      </section>

    </main><!-- End #main -->

<?php
require "footer.php";
?>