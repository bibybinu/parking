
<?php
// session_start();
require("../php/connect.php");
require ('header.php');
$email=$_SESSION['email'];
$s123="select * from complaint where userid='$email' and status=1";


$a=mysqli_query($conn,$s123);

?>
<?php

?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Complaints</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item active">View Complaint</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">My Complaint</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">UserName</th>
                  <th scope="col">Title</th>
                  <th scope="col">Priority</th>
                  <th scope="col" width="30%">Description</th>
                   <th scope="col">Reply</th>
                

                </tr>
              </thead>
              <tbody>
                <?php
                $n=1;
                while($row=mysqli_fetch_assoc($a))
                {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $n;?></th>
                    <td><?php echo $row['userid']?></td>
                    <td><?php echo $row['subject']?></td>
                    
                    <td><?php 
                    if($row['priority']=='hig') echo "<a class='btn btn-xs rounded-pill btn-danger'>High</a>";
                    else if($row['priority']=='med') echo "<a class='btn btn-sm rounded-pill btn-warning'>Medium</a>";
                    else if($row['priority']=='low') echo "<a class='btn btn-sm rounded-pill btn-info'>Low</a>";?>

                  </td>

                  <td><?php echo $row['description'];?></td>
                  <td><?php echo $row['reply'];?></td>


                

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
</section>



  </div>
</div>





</main><!-- End main -->

<?php
require "footer.php";
?>