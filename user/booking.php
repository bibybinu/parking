<?php
require "header.php";
$id=$_GET['id'];
$m=$_SESSION['email'];
$sql="select * from time";
$r=mysqli_query($conn,$sql);
$r2=mysqli_query($conn,$sql);
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
      </div><!-- End Page Title -->

      <section class="section dashboard">
      <div class="col-md-8 offset-2">
       <div class="card">
            <div class="card-body">
              <h5 class="card-title">Floating labels Form</h5>

              <!-- Floating Labels Form -->
              <form action="phpbook.php" method="post" class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="vnum" placeholder="Your Name" required="">
                    <label for="floatingName">Vehicle Number</label>
                  </div>
                </div>


                 

                     <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="type" required="" >
                       <option selected="" disabled=""> Select Vehicle Type</option>
                      <?php
                      $sql11="SELECT * FROM plotdtl WHERE plotid='$id'";

                      $vt=mysqli_query($conn,$sql11);
                      while($row11=mysqli_fetch_assoc($vt))
                      {

                      if($row11['vtype']=="t")
                       { 

                        ?>  <option value="t">Two Wheeler</option> <?php
                        }
                      else if($row11['vtype']=="f")
                      {
                          ?>  <option value="f">Four Wheeler</option> <?php
                      }
                      else
                       { 
                        ?>  <option value="h">Heavy Vehichle</option> <?php
                      }

                      
                    }
                      ?>

                    </select>
                     <label for="floatingSelect">Vehicle Type</label>
                    
                  </div>
                </div>



                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" name="phone" class="form-control" id="floatingphone" minlength="10" maxlength="10"   pattern="^[6-9]\d*$" title="enter a valid phonenumber" required="" placeholder="Phone">
                      <label for="floatingphone">Phone</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="email" required="" id="floatingEmail" placeholder="City" disabled="" value="<?php echo $m;?>" >
                      <label for="floatingEmail">Email</label>
                    </div>
                  </div>
                </div>




                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="date" name="sdate" class="form-control" id="floatingsdate" placeholder="" min="<?php echo date('Y-m-d');?>" required="" onchange="setenddate(this.value)">
                      <label for="floatingsdate">Starting Date</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                     <div class="form-floating">
                      <!-- <input type="time" name="stime" step="1800000"class="form-control" required="" id="floatingst" placeholder=""  onchange="setendtime(this.value)"> -->
                      <select name=stime class="form-select" id="stime">
                                    <option disabled="" selected=""> Select Start Time</option>

                                    <?php 
                                        $n=1;
                                        while($row=mysqli_fetch_assoc($r))
                                        {
                                          $st=$row['id'];



                                          ?>

                                          <option value='<?php echo $row['id'] ; ?>' id='<?php echo $row['id'] ; ?>' ><?php echo $row['data'] ?></option>
                                          <?php 
                                        }

                                        ?>
                                </select>
                      <label for="floatingst">Starting Time</label>
                    </div>
                  </div>
                </div>

                <center><i class="bi bi-arrow-down-circle-green" style="font-size: 200%;"></i></center>

                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="date" class="form-control" name="edate" required="" id="floatingedate" placeholder="" onchange="setendtime(this.value)">
                      <label for="floatingsdate">Ending Date</label>
                    </div>
                  </div>

                   <input type="hidden" name="id" value="<?php echo $id;?>"  >


                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                     <select name=etime class="form-select" id="etime">
                                    <option disabled="" selected=""> Select End Time</option>

                                    <?php 
                                        $n=1;
                                        while($row2=mysqli_fetch_assoc($r2))
                                        {
                                          $et=$row2['id'];



                                          ?>

                                          <option value='<?php echo $row2['id'] ; ?>' id='<?php echo $row2['id']+100 ; ?>'><?php echo $row2['data'] ?></option>
                                          <?php 
                                        }

                                        ?>
                                </select>
                                <label for="floatingst">Ending Time</label>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
       
      </section>

    </main><!-- End #main -->

<?php
require "footer.php";
?>

<script type="text/javascript">



  /////////////////function for time 

  function setendtime(edate) {

    var sdate=document.getElementById('floatingsdate').value;
    var stime=document.getElementById('stime').value;
   
    //alert(sdate);
    stime=parseInt(stime);
   // alert(stime+10)

   
    if(edate==sdate)
    {
       
       for(var i=101;i<=stime+100;i++)
          document.getElementById(i).setAttribute("disabled",1);
    }


  }

////////////////////////////////////function for date

  function setenddate(vale) {
    document.getElementById('floatingedate').setAttribute("min",vale);
    var today='<?php echo date('Y-m-d');?>';
    if(today==vale)
      {  
        const d = new Date();
        let hour = d.getHours();
        //alert(hour);
        for(var i=1;i<=hour;i++)
          document.getElementById(i).setAttribute("disabled",1);
      }
    


  }
</script>