	<?php
	require "header.php";
	$id=$_GET['id'];

  $pid=$id;
	$sql="select * from plot where plotid=$id";

  $sql20=$sql3="select * from plotdtl where plotid='$id'";

  $details=mysqli_query($conn,$sql20);

	$d=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($d);

   //////////////////////////////////////////////////////////////////

  if(isset($_POST['slotadd'])) {
    $vtype=$_POST['type'];
    $slots=$_POST['capacity'];
    $rate=$_POST['rate'];
    $id=$_POST['id'];


    $sql3="select * from plotdtl where vtype='$vtype' and plotid='$id'";
    $c=mysqli_query($conn,$sql3);
    $num=mysqli_num_rows($c);


    if($num==0)
    {

      $sql="INSERT into plotdtl(vtype,capacity,rate,plotid) values('$vtype','$slots','$rate','$id')";

      if(mysqli_query($conn,$sql))
      {
       ?>
       <script type="text/javascript">
         alert("details added");
         window.location.href=window.location.href;
       </script>
       <?php


       $sql2="update plot set status='1' where plotid='$id'";
       mysqli_query($conn,$sql2);

     }
     else echo "error"; 
   }
   
   else{

    ?>
    <script type="text/javascript">
     alert("vehicle type already added");
     window.location.href=window.location.href;
   </script>
   <?php

 }




}
?>
/////////////////////////////////////////////////////////////////////////////////

<main id="main" class="main">

 <div class="pagetitle">
   <h1></h1>
   <nav>
     <ol class="breadcrumb">

     </ol>
   </nav>
 </div><!-- End Page Title -->



 <section class="section dashboard">

  <div class="row">


    <div class="col-xl-8 offset-2">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Plot</button>
            </li>

          

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Add details</button>
            </li>

              <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">View Details</button>
            </li>

          </ul>



          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
             <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="<?php echo '../uploads/plots/'.$row['plotimg'];?>" alt="Profile" class="" style="width: auto;height: 220px;">
                <h2><?php echo $row['name'];?></h2>
                <h3></h3>

              </div>
            </div>
            <h5 class="card-title">Plot Details</h5>

            <div class="row">
              <div class="col-lg-3 col-md-4 label ">Plot Name</div>
              <div class="col-lg-9 col-md-8"><?php echo $row['name'];?></div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Plot Id</div>
              <div class="col-lg-9 col-md-8"><?php echo $id;?></div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Phone</div>
              <div class="col-lg-9 col-md-8"><?php echo $row['contact'];?>1</div>
            </div>





            <div class="row">
              <div class="col-lg-3 col-md-4 label">Address</div>
              <div class="col-lg-9 col-md-8"><?php echo $row['address']."<br>";echo $row['landmark']."<br>";echo $row['city']."<br>";?></div>
            </div>


          </div>



          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            <!-- Profile Edit Form -->
            <form action="editplot.php" method="post">




              <div class="row mb-3">
                <label for="name" class="col-md-4 col-lg-3 col-form-label">Plot Name</label>
                <div class="col-md-8 col-lg-9">
                  <input type="varchar" class="form-control" pattern="[A-Za-z \.]+" title="no digits or symbols" placeholder="User Name" name="name" id="name"  required="" value="<?php echo $row['name'];?>">
                </div>
              </div>

              <input type="hidden" name="id" value="<?php echo $id;?>"  >


              <div class="row mb-3">
                <label for="num" class="col-md-4 col-lg-3 col-form-label">Phone </label>
                <div class="col-md-8 col-lg-9">
                  <input type="varchar" minlength="10" maxlength="10" class="form-control" placeholder="Phone number" name="number" pattern="^[6-9]\d*$" title="enter a valid phonenumber" id="num" required="" value="<?php echo $row['contact'];?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Plot Images</label>
                <div class="col-md-8 col-lg-9">
                  <img src="<?php echo '../uploads/plots/'.$row['plotimg'];?>" alt="Profile" style="width: auto;height: 220px;">
                  <div class="pt-2">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                  </div>
                </div>
              </div>




              <div class="text-center">
                <button type="submit"  name="editplot" class="btn btn-primary">Save Changes</button>
              </div>
            </form><!-- End Profile Edit Form -->

          </div>


          <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form action="" method="POST" name="pass" >

              <div class="row mb-3">
                <label for="type" class="col-md-4 col-lg-3 col-form-label">Vehicle Type</label>
                <div class="col-md-8 col-lg-8">
                  <div class="col-7">

                   <select name="type" id="type" class="form-control">
                     <option value="t">Two Wheeler</option>
                     <option value="f">Four/Three Wheeler</option>
                     <option value="h" selected="">Heavy Vehicle</option>
                   </select>
                 </div>
               </div>
             </div>

             <div class="row mb-3">
              <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">no of slots</label>
              <div class="col-md-8 col-lg-9">
                <input name="capacity" type="number" class="form-control" id="newPassword" required="">
              </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $id;?>"  >

            <div class="row mb-3">
              <label for="rate" class="col-md-4 col-lg-3 col-form-label">Rate per slot</label>
              <div class="col-md-8 col-lg-9">
                <input name="rate" type="text" class="form-control" id="rate" required="">

              </div>
            </div>

            <div class="text-center">
              <button type="submit" name="slotadd" class="btn btn-primary">submit</button>
            </div>
            </form><!-- End Change Password Form -->

          </div>

          <div class="tab-pane fade pt-3" id="profile-settings">
            <div class="row">
              <div class="col-lg-12">

                
                  <div class="card-body">
                   <!--  <h5 class="card-title">Datatables</h5> -->
                   

                    <!-- Table with stripped rows -->
                    <table class="table table datatable ">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Vechicle Type</th>
                          <th scope="col">Number of Slots</th>
                          <th scope="col">Rate per Slot (per Hour)</th>
                          <th scope="col">Action</th>
                          


                        </tr>
                      </thead>
                      <tbody>
                        <?php

                          $n=1;
                          while($row=mysqli_fetch_assoc($details))
                          {
                            $mail=$row['pdid'];
                            ?>
                          
                        <tr>

                          <th scope="row"><?php echo $n++;?></th>
                          <td><?php if ($row['vtype']=='h') echo "Heavy Vechicle"; elseif ($row['vtype']=='t') echo "Two Wheeler";elseif ($row['vtype']=='f') echo "Four Wheeler";?></td>
                          <td><?php echo $row['capacity'];?></td>
                          <td><?php echo $row['rate'];?></td>
                         
                          <td><div class="btn-group" role="group" aria-label="Basic example">
                           <a href="removepd.php?mail=<?php echo $mail;?>&id=<?php echo $pid;?>"  class="btn btn-sm btn-danger">Remove</a>

                           </div>
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

          </div>

      </div><!-- End Bordered Tabs -->

    </div>
  </div>

</div>
</div>



	      	<!-- <div class="row">
	      		<div class="col-md-6">
	      			
	      			<div class="row">
	      				<div class="col-lg-3 col-md-4 label">Phone</div>
	      				<div class="col-lg-9 col-md-8"><?php echo $row['contact'];?></div>
	      			</div>  

	      			<div class="row">
	      				<div class="col-lg-3 col-md-4 label">plot type</div>
	      				<div class="col-lg-9 col-md-8"><?php echo $row['type'];?></div>
	      			</div>

	      			<div class="row">
	      				<div class="col-lg-3 col-md-4 label">Criteria</div>
	      				<div class="col-lg-9 col-md-8"><?php echo $row['criteria'];?></div>
	      			</div>

	      			<div class="row">
	      				<div class="col-lg-3 col-md-4 label">Address</div>
	      				<div class="col-lg-9 col-md-8"><?php echo $row['address']."<br>".$row['landmark']."<br>".$row['city'];?></div>
	      			</div>

	      		</div>
	      	</div> -->







	      </section>




      </main>                  	


      <?php

      require "footer.php";
    ?>