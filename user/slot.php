<?php
require "header.php";

?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>USER</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">user</li>
      </ol>
    </nav>
  </div>


  <section class="section dashboard">

   <div class="card">
    <div class="card-body">
      <h3 class="card-title">Vehicle type</h3>

      <form class="row g-3" action="addslot.php" method="post">
        <h5> two wheeler </h5>



          <div class="col-3">

            <label for="slots"  class="form-label">No of slots available::</label>


            <input type="number" name="tcapacity" class="form-control" id="slots" required="" >

            
          </div>
          <div class="col-3">


            <label for="fee"  class="form-label">rate per slot</label>
            <input type="text" name="trate" class="form-control" id="fee" required=""  >





        </div>




          <h5> Four/Three wheeler </h5>



          <div class="col-3">

            <label for="slots"  class="form-label">No of slots available::</label>


            <input type="number" name="fcapacity" class="form-control" id="slots" required="" >

            
          </div>
          <div class="col-3">


            <label for="fee"  class="form-label">rate per slot</label>
            <input type="text" name="frate" class="form-control" id="fee" required=""  >





        </div>

          <h5> Heavy Vehicles </h5>



          <div class="col-3">

            <label for="slots"  class="form-label">No of slots available::</label>


            <input type="number" name="hcapacity" class="form-control" id="slots" required="" >

            
          </div>
          <div class="col-3">


            <label for="fee"  class="form-label">rate per slot</label>
            <input type="text" name="hrate" class="form-control" id="fee" required=""  >





        </div>

        
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
      </form>




    </div>
  </div>

</section>

</main>



<?php
require "footer.php";
?>