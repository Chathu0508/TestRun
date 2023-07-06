<?php
include './../Sharefolder/Header.php';
include './../CSS/Res.php';
?>

<style>
    .box {
        margin: 0 px;
        padding-top: 1%;
        padding-left: 1%;
        color: white;
    }
</style>
<?php include './Navbar.php';?>

<div class='card mb-4 box-shawdow back'>
  <div id="container ">
    <div class="font1 ">
      <h5>Customer Request Summary</h5>
    </div>
    <br />
    <main style="text-align: center;">
      <div class="container-fluid px-4">
        <div class="row">
          <div class="col-xl-3 col-md-6" id="left">
            <div class="card box-shawdow bg-primary text-white mb-4">
              <div class="card-body">
                Pending Customer Requests
              </div>
              <div class=' row mx-0 d-flex jusitify-content-center'>
                <div class='col-md-12 d-flex justify-content-center'>
                  <label class="text-center " id="size"><?php echo $cuspendingCount ?></label>
                </div>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-center">
                <a class="small text-white stretched-link" href="CustomerReq.php">
                  View Details
                </a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6" id="center">
            <div class="card box-shawdow bg-success text-white mb-4">
              <div class="card-body">
                Approval Customer Requests
              </div>
              <div class=' row mx-0 d-flex jusitify-content-center'>
                <div class='col-md-12 d-flex justify-content-center'>
                  <label class="text-center"><?php echo $cusapprovalCount ?></label>
                </div>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-center">
                <a class="small text-white stretched-link" href="CustomerReq.php">
                  View Details
                </a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card box-shawdow bg-danger text-white mb-4">
              <div class="card-body">
                Reject Customer Requests
              </div>
              <div class=' row mx-0 d-flex jusitify-content-center'>
                <div class='col-md-12 d-flex justify-content-center'>
                  <label class="text-center"><?php echo $cusrejectCount ?></label>
                </div>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-center">
                <a class="small text-white stretched-link" href="CustomerReq.php">
                  View Details
                </a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
        </div>
        <br />
      </div>
    </main>
  </div>
</div>