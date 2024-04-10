<?php include('sidebar.php');?>
  <section class="home-section " id="">
  <?php include('header.php')?>

    <div class="container mt-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
        <h2>Welcome! EMOCARE</h2>
      </nav>
    </div>
    <div class="container p-5">
      <div class="row mb-5">
        <div class="col-md-3">
          <div class="card bg-danger">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <?php include('count_total_student.php') ?>
                  <p class="text-light ">Total Students </p>
                </div>
                <div>
                  <i class="bx bxs-book-add" id="log_out" style="font-size: 3rem; color: #fff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-primary">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                <?php include('count_total-course.php') ?>
                  <p class="text-light ">Total Course</p>
                </div>
                <div>
                  <i class="bx bxs-user-badge" id="log_out" style="font-size: 3rem; color: #fff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-warning">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h2 class="text-light fs-1">₹0.00</h2>
                  <p class="text-light ">Total Wallet Balance

                  </p>
                </div>
                <div>
                  <i class="bx bx-rupee" id="log_out" style="font-size: 3rem; color: #fff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">

        </div>
      </div>
      <div class="row mb-5">
        <h2>Student Status</h2>
        <div class="col-md-3">
          <div class="card bg-secondary">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h2 class="text-light fs-1">0</h2>
                  <p class="text-light ">Applied</p>
                </div>
                <div>
                  <i class="bx bx-file-blank" id="log_out" style="font-size: 3rem; color: #fff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-info">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h2 class="text-light fs-1">0</h2>
                  <p class="text-light ">On Process</p>
                </div>
                <div>
                  <i class="bx bx-file-blank" id="log_out" style="font-size: 3rem; color: #fff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-warning">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h2 class="text-light fs-1">0</h2>
                  <p class="text-light ">On Hold</p>
                </div>
                <div>
                  <i class="bx bx-file-blank" id="log_out" style="font-size: 3rem; color: #fff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-success">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h2 class="text-light fs-1">0</h2>
                  <p class="text-light ">Completed</p>
                </div>
                <div>
                  <i class="bx bx-file-blank" id="log_out" style="font-size: 3rem; color: #fff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="card  bg-light">
            <div class="card-header">
              Students Status
            </div>
            <div class="card-body chart">
              <canvas id="myPieChart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card  bg-light">
            <div class="card-header">
              Students Added (Last 6 Months)
            </div>
            <div class="card-body chart">
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <script src="assets/js/script.js"></script> 
</body>
</html>