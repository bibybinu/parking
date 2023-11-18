  <?php
  require "header.php";
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


   <section class="section profile">
        <div class="row">
       

          <div class="col-xl-8 offset-2">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>

                 <!--  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                  </li> -->

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                     <div class="card">
                      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?php echo '../uploads/profile/'.$user['img'];?>" alt="Profile" class="rounded-circle">
                        <h2 style="text-transform: capitalize;"><?php echo $user['name'];?></h2>
                       
                        
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">User Name</div>
                      <div class="col-lg-9 col-md-8"><?php echo $user['name'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8"><?php echo $user['email'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Phone</div>
                      <div class="col-lg-9 col-md-8"><?php echo $user['number'];?>1</div>
                    </div>



                    

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Address</div>
                      <div class="col-lg-9 col-md-8"><?php echo $user['house']."<br>";echo $user['street']."<br>";echo $user['city']."<br>";echo $user['pincode'];?></div>
                    </div>

                    
                    

                  </div>

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form action="editprofile.php" method="post">
                   

                      <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">User Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="text" class="form-control" pattern="[A-Za-z \.]+" title="no digits or symbols" placeholder="User Name" name="name" id="name"  required="" value="<?php echo $user['name'];?>">
                        </div>
                      </div>

                        <div class="row mb-3">
                        <label for="em" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="em" value="<?php echo $user['email'];?>" disabled >
                        </div>
                      </div>

                      <!-- <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                        </div>
                      </div> -->

                      <div class="row mb-3">
                        <label for="num" class="col-md-4 col-lg-3 col-form-label">Phone </label>
                        <div class="col-md-8 col-lg-9">
                          <input type="varchar" minlength="10" maxlength="10" class="form-control" placeholder="Phone number" name="number" pattern="^[6-9]\d*$" title="enter a valid phonenumber" id="num" required="" value="<?php echo $user['number'];?>">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="housename" class="col-md-4 col-lg-3 col-form-label">House Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="varchar" class="form-control" name="house" id="housename" placeholder="house name"  required="" value="<?php echo $user['house'];?>">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="streetname" class="col-md-4 col-lg-3 col-form-label">Street Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="varchar" class="form-control" name="street" id="streetname" placeholder="street name" pattern="[A-Za-z]+" title="only alphabets" required="" value="<?php echo $user['street'];?>">
                        </div>
                      </div>

                     
  <!--                     <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                        </div>
                      </div>   -->

                       <div class="row mb-3">
                        <label for="pin" class="col-md-4 col-lg-3 col-form-label">Pincode</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="varchar" class="form-control" name="pincode" id="pin" placeholder="pincode" pattern="^[1-9]{6}" title="combination of exact 6 digits must not start with zero" maxlength="6" required="" value="<?php echo $user['pincode'];?>">

                        </div>
                      </div>


                    

                    

                   <!--    <div class="row mb-3">
                        <label for="district" class="col-md-4 col-lg-3 col-form-label">District</label>
                        <div class="col-md-8 col-lg-9">
                         <input type="varchar" class="form-control" name="district" id="district" placeholder="district "   required="">
                        </div>
                      </div> -->

                     

                       <div class="row mb-3">


                      <label for="district" class="col-md-4 col-lg-3 col-form-label">District</label>

                      <div class="col-md-8 col-lg-9">

                  <select name="district" id="district" class="form-control" required>

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
                  </div>


                    <div class="row mb-3">


                      <label for="city" class="col-md-4 col-lg-3 col-form-label">City</label>

                      <div class="col-md-8 col-lg-9">

                  <select name="city" id="city" class="form-control" required>

                                          <option value="" selected="" disabled="" style="text-transform: capitalize;">Select your city</option>
                                          <?php 
                                            while ($row=mysqli_fetch_assoc($c)) 
                                            {
                                              ?>
                                              <option value="<?php echo $row['cityid'];?>">
                                                <?php echo $row['city'];?></option>

                                              <?php


                                            }


                                          ?>

                                          
                                          

                                      </select> 
                                    </div>
                  </div>

                  






                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form><!-- End Profile Edit Form -->

                  </div>

                 

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form action="editpw.php" method="POST" name="pass" onsubmit="return validate()">

                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                          <span id="paswrd"></span>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form><!-- End Change Password Form -->

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
        </div>
      </section>
     

  </main><!-- End #main -->

  <?php
  require "footer.php";
  ?>