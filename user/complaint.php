<?php
require '../php/connect.php';
require 'header.php';
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Complaint</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Complaint</li>
                </ol>
        </nav>
    </div>
 
 
      <div class="row">
        <div class="col-lg-12">

        
        <div class="card">
            <div class="card-body">
              <h2 class="text-center pt-5">Complaint</h2>

              <!-- General Form Elements -->
              <form action="com.php" method="POST" >
                <div class="row  p-3">
                  
                 
                </div>


                  <br>

                  <div class="col-sm-8 offset-2 ">
                    <input type="text" name="subject" class="form-control" placeholder="Complaint Title">
                    
                  </div>

                  <br>

                  <div class="col-sm-8 offset-2 ">
                    <textarea name="description" class="form-control" placeholder="Complaint Description">
                    </textarea>
                  </div>

                  <br>

                  <legend class="col-form-label col-sm-8 offset-2">Priority</legend>
                  <div class="col-sm-8 offset-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="priority" id="priority1" value="high" >
                      <label class="form-check-label" for="priority1">
                        High
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="priority" id="priority2" value="medium">
                      <label class="form-check-label" for="priority2">
                        Medium
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="priority" id="priority" value="low">
                      <label class="form-check-label" for="priority3">
                        Low
                      </label>
                    </div>
                  </div>
                 
                  
                  <div class="col-sm-6 offset-sm-5">
                    <input type="submit" class="btn btn-info" >
                    
                  </div>
                </div>
             

              </form><!-- End General Form Elements -->
              </div>
            </div>
</main>
<?php
require 'footer.php';
?>