<?php
require "../php/connect.php";
require "header.php";
$sql="select * from complaint,reg where complaint.userid=reg.email and status=-1 ";
$a=mysqli_query($conn,$sql);
$num=mysqli_num_rows($a);

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Complaints</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item active">View Complaints</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Complaints</h5>

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
                  <th scope="col" width="20%">Action</th>

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
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['subject']?></td>
                    
                    <td><?php 
                    if($row['priority']=='hig') echo "<a class='btn btn-xs rounded-pill btn-danger'>High</a>";
                    else if($row['priority']=='med') echo "<a class='btn btn-sm rounded-pill btn-warning'>Medium</a>";
                    else if($row['priority']=='low') echo "<a class='btn btn-sm rounded-pill btn-info'>Low</a>";?>

                  </td>

                  <td><?php echo $row['description'];?></td>
                  <td><?php echo $row['reply'];?></td>


                  <td>
                    <?php
                    if($row['status']==-1)
                      {
                        ?>
                        <div class="btn-group">
                    <a class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#verticalycentered" onclick="document.frm.complaintid.value=<?php echo $row['complaintid'];?>">Resolve</a>
                  </div> 
<?php
}
?>
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
</section>


<div class="modal fade" id="verticalycentered" tabindex="-1">


  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reply</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form name="frm" action="reply.php" method="POST">
        <input type="hidden" name="complaintid">
        <div class="modal-body">
          <div class="row mb-2">
            <label for="inputEmail" class="col-sm-3 col-form-label">Reply</label>
            <div class="col-sm-8"> 
              <textarea name="reply" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>

        </div>
      </form>
    </div>
  </div>
</div>





</main><!-- End main -->

<?php
require "footer.php";
?>