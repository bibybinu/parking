<?php
require "header.php";
 $sql="select * from reg,district where email in(select email from login where(status='1' and type='2')) and reg.distid=district.distid;";

  $sql2="select * from reg,district where email in(select email from login where(status='0' and type='2')) and reg.distid=district.distid;";     
  $d=mysqli_query($conn,$sql);
  $e=mysqli_query($conn,$sql2);
  ?>
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Users</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
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
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">number</th>
                    <th scope="col">house name</th>
                    <th scope="col">street </th>
                    
                    <th scope="col">city</th>
                    <th scope="col">district</th>
                    <th scope="col">pincode</th>
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
                    <td><?php echo $row['number'];?></td>
                    <td><?php echo $row['house'];?></td>
                    <td><?php echo $row['street'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['district'];?></td>
                    <td><?php echo $row['pincode'];?></td>
                    <td><div class="btn-group" role="group" aria-label="Basic example">
                     <a href="php/suspend.php?mail=<?php echo $mail;?>"  class="btn btn-secondary">Suspend</a>

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
    </section>  






    ///////////////////////////////////////////////////////////////// 

    <h2>Suspended Users</h2>

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
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">number</th>
                    <th scope="col">house name</th>
                    <th scope="col">street </th>
                    
                    <th scope="col">city</th>
                    <th scope="col">district</th>
                    <th scope="col">pincode</th>
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
                    <td><?php echo $row2['number'];?></td>
                    <td><?php echo $row2['house'];?></td>
                    <td><?php echo $row2['street'];?></td>
                    <td><?php echo $row2['city'];?></td>
                    <td><?php echo $row2['district'];?></td>
                    <td><?php echo $row2['pincode'];?></td>
                    <td><div class="btn-group" role="group" aria-label="Basic example">
                     <a href="php/revoke.php?mail=<?php echo $mail;?>"  class="btn btn-warning">Revoke</a>

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
    </section>



    </main><!-- End #main -->

<?php

require "footer.php";
?>