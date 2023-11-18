<?php
require "header.php";
?>
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>USER</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">My Plots</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



      <section class="section dashboard">

         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="addplot.php" method="post" enctype="multipart/form-data">
                
                   <div class="col-6">
                <label for="city" class="form-label">Plot name</label>
            <input type="varchar" class="form-control" name="name" id="city" placeholder=" name" pattern="[A-Za-z  ]+" title="only alphabets" required="">
          </div>


                <div class="col-6">
                  <label for="plottype" class="form-label">Plot type</label>
                 <select name="type" id="" class="form-select">
                   <option value="private">Private</option>
                   <option value="public">Public</option>
                   <option value="paid" selected="">Paid</option>
                 </select>
                </div>

                 <div class="col-6">
                  <label for="plottype" class="form-label">Criteria</label>
                  <select name="criteria" id="" class="form-select">
                   <option value="Customers only">Customers Only</option>
                   <option value="Staff only">Staff Only</option>
                   <option value="Open to all" selected="">Open to All</option>
                 </select>
                </div>

                 <div class="col-6">
                  <label for="phone"  class="form-label">Phone</label>
                  <input type="text" name="phone" class="form-control" id="phone" required="" pattern="[6-9]{1}[0-9]{9}" placeholder="Phone">
                </div>



                <div class="col-6">


                    <label for="district" class="form-label">district</label>

                <select name="district" id="district" class="form-select" required>

                                        <option value="" selected="" disabled="" style="text-transform: capitalize;">Select your District</option>
                                        <?php 
                                          while ($row=mysqli_fetch_assoc($d)) 
                                          {
                                            ?>
                                            <option value="<?php echo $row['distid'];?>">
                                              <?php echo $row['district'];?></option>

                                            <?php


                                          }


                                        ?>

                                        
                                        

                                    </select> 
                </div>
                 <div class="col-6">
                <label for="city" class="form-label">city</label>
            <input type="varchar" class="form-control" name="city" id="city" placeholder="city name" pattern="[A-Za-z]+" title="only alphabets" required="">
          </div>

           <div class="col-6">
                  <label for="inputAddress" class="form-label">Address</label>
                  <textarea class="form-control" name="address" id="inputAddress" placeholder=" " required=""> </textarea> 
                </div>

                <div class="col-6">
                  <label for="inputAddress"  class="form-label">Landmark</label>
                  <textarea name="landmark" class="form-control" id="inputAddress" placeholder=" " required=""> </textarea>
                </div>

                 

                
                <div class="col-6">
                  <label for="inputAddress"  class="form-label">Map link</label>
                  <input type="textarea" name="link" class="form-control" id="inputAddress" placeholder="paste your google map link" required="">
                </div>
                 <div class="col-6">
                  <label for="inputAddress"  class="form-label">Image</label>
                  <input type="file" name="plotimg" class="form-control" id="img" required="">
                </div>


               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
       
      </section>

    </main><!-- End #main -->

<?php
require "footer.php";
?>