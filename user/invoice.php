<?php
require "header.php";
$bkid=$_GET['id'];
$amt=$_GET['amt'];
 $sql="select * from vehicle where bookid='$bkid'";
    $s=mysqli_query($conn,$sql);
    $r=mysqli_fetch_assoc($s);
    $id=$r['plotid'];
    $t=$r['type']; //echo $t;
    $sql2="select rate from plotdtl where (plotid='$id' and vtype='$t')";
    //echo $sql2;
     $s2=mysqli_query($conn,$sql2);
     $r2=mysqli_fetch_assoc($s2);
     $em=$r['email'];
     $sql3="select * from reg where email='$em'";
     $s3=mysqli_query($conn,$sql3);
     $r3=mysqli_fetch_assoc($s3);
     $sql4="select * from plot where email='$id'";
     $s4=mysqli_query($conn,$sql4);
     $r4=mysqli_fetch_assoc($s4);


?>

<style type="text/css">
  .card {
    margin-bottom: 1.5rem
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ced3;
    border-radius: .25rem
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f0f3f5;
    border-bottom: 1px solid #c8ced3
}
</style>
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

        <div class="container-fluid">
            <div id="ui-view" data-select2-id="ui-view">
                <div>
                    <div class="card">
                        <div class="card-header">Invoice
                            <strong>#PS-B<?php echo "100".$r['plotid'];?></strong>
                            <a  style="float: right; " class="btn btn-sm btn-primary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                                <i class="fa fa-print"></i> Print</a>
                            
                        </div>
                        <div class="card-body pt-4">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h6 class="mb-3">User Details</h6>
                                    <div>
                                        <strong><?php echo $r3['name'];?></strong>
                                    </div>
                                    <div><?php echo $r3['house'];?>, <?php echo $r3['street'];?></div>
                                    <div><?php echo $r3['city'];?>, <?php echo $r3['pincode'];?></div>
                                    <div>Email: <?php echo $r3['email'];?></div>
                                    <div>Phone: <?php echo $r3['number'];?></div>
                                </div>
                                
                              <!--   <div class="col-sm-4 offset-4">
                                    <h6 class="mb-3"> Plot Details:</h6>
                                    <div>Invoice
                                        <strong>#BBB-10010110101938</strong>
                                    </div>
                                    <div>April 30, 2019</div>
                                    <div>VAT: NYC09090390</div>
                                    <div>Account Name: BBBootstrap Inc</div>
                                    <div>
                                        <strong>SWIFT code: 99 8888 7777 6666 5555</strong>
                                    </div>
                                </div -->>
                            </div>
                            <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Vehicle No</th>
                                            <th>Starting</th>
                                            <th class="center">Ending</th>
                                            <th class="right">Duration</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center"> </td>
                                            <td class="left"><?php echo $r['vnum'];?></td>
                                            <td class="left"><?php echo $r['sdate']."  ";echo date('H:i:s',strtotime($r['timein']));?></td>
                                            <td class="center"><?php echo $r['edate']."  ".$r['timeout'];?></td>
                                            <td class="right"><?php echo $r['duration']."  hours";?></td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                               
                                <div class="col-lg-6 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>
                                                <tr>
                                                <td class="left">
                                                    <strong>Total</strong>
                                                </td>
                                                <td class="right"><strong>
                                                    <?php echo "Rs ".$amt;?></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a class="btn btn-success" href="index.php" data-abc="true">
                                        <i class="fa fa-usd"></i>Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
      </section>

    </main><!-- End #main -->

<?php
require "footer.php";
?>