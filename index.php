<?php
session_start();

// var_dump($_SESSION);

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link href="assets/template/admin/img/logo/logo.png" rel="icon"> -->
  <title>SIMASKIR</title>
  <link href="assets/template/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/template/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/template/admin/css/ruang-admin.min.css" rel="stylesheet">

  
</head>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if (isset($_SESSION['success'])) {
?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            Swal.fire({
                icon: 'success',
                title: 'Login Berhasil',
                text: '<?php echo $_SESSION['success']; ?>',
                showConfirmButton: false,
                timer: 3000
            });

        });
    </script>
<?php
    unset($_SESSION['success']);
}
?>
<body id="page-top">
  <div id="wrapper">

    <?php
    include 'sidebar.php';
    ?>

    <div id="content-wrapper" class="d-flex flex-column">
      <?php
      include 'navbar.php';
      ?>
      <!-- Container Fluid-->
      <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex flex-column flex-sm-row align-items-sm-center justify-content-between mb-4">
          <div>
            <h3 class="dashboard-title mb-1">
              Dashboard SIMASKIR
            </h3>

            <p class="dashboard-subtitle mb-0">
              Monitoring penjualan, stok, dan transaksi toko grosir
            </p>
          </div>
          <form method="GET" class="d-flex align-items-center filter-box mt-3 mt-sm-0">
            <input type="date"
              name="tgl_awal"
              class="form-control mr-2"
              value="<?= $_GET['tgl_awal'] ?? date('Y-m-01'); ?>">

            <input type="date"
              name="tgl_akhir"
              class="form-control mr-2"
              value="<?= $_GET['tgl_akhir'] ?? date('Y-m-d'); ?>">

            <button type="submit" class="btn btn-primary">
            Filter
            </button>
          </form>
        </div>

        <div class="row mb-3">
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total Pendapatan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp200.000.000</div>
                    <div class="mt-2 mb-0 text-muted text-xs">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                      <span>Since last month</span>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="icon-circle bg-soft-primary">
                      <i class="fas fa-wallet text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Earnings (Annual) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total Penjualan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">650</div>
                    <div class="mt-2 mb-0 text-muted text-xs">
                      <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                      <span>Since last years</span>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="icon-circle bg-soft-success">
                      <i class="fas fa-shopping-cart text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- New User Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total Pembelian</div>
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366</div>
                    <div class="mt-2 mb-0 text-muted text-xs">
                      <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                      <span>Since last month</span>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="icon-circle bg-soft-info">
                      <i class="fas fa-truck-loading text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total Produk Terjual </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    <div class="mt-2 mb-0 text-muted text-xs">
                      <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                      <span>Since yesterday</span>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="icon-circle bg-soft-warning">
                      <i class="fas fa-box-open text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Area Chart -->
          <div class="col-xl-8 col-lg-7">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Penjualan</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <!-- Pie Chart -->
          <div class="col-xl-4 col-lg-5">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Penjualan Per Tahun</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Month <i class="fas fa-chevron-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Select Periode</div>
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Week</a>
                    <a class="dropdown-item active" href="#">Month</a>
                    <a class="dropdown-item" href="#">This Year</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <div class="small text-gray-500">Oblong T-Shirt
                    <div class="small float-right"><b>600 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Gundam 90'Editions
                    <div class="small float-right"><b>500 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Rounded Hat
                    <div class="small float-right"><b>455 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Indomie Goreng
                    <div class="small float-right"><b>400 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Remote Control Car Racing
                    <div class="small float-right"><b>200 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-center">
                <a class="m-0 small text-primary card-link" href="#">View More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Invoice Example -->
          <div class="col-xl-8 col-lg-7 mb-4">
            <div class="card">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Item</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#">RA0449</a></td>
                      <td>Udin Wayang</td>
                      <td>Nasi Padang</td>
                      <td><span class="badge badge-success">Delivered</span></td>
                      <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                      <td><a href="#">RA5324</a></td>
                      <td>Jaenab Bajigur</td>
                      <td>Gundam 90' Edition</td>
                      <td><span class="badge badge-warning">Shipping</span></td>
                      <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                      <td><a href="#">RA8568</a></td>
                      <td>Rivat Mahesa</td>
                      <td>Oblong T-Shirt</td>
                      <td><span class="badge badge-danger">Pending</span></td>
                      <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                      <td><a href="#">RA1453</a></td>
                      <td>Indri Junanda</td>
                      <td>Hat Rounded</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                      <td><a href="#">RA1998</a></td>
                      <td>Udin Cilok</td>
                      <td>Baby Powder</td>
                      <td><span class="badge badge-success">Delivered</span></td>
                      <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer"></div>
            </div>
          </div>

          <!-- Message From Customer-->
          <div class="col-xl-4 col-lg-5 ">
            <div class="card">
              <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-light">Message From Customer</h6>
              </div>
              <div>
                <div class="customer-message align-items-center">
                  <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">Hi there! I am wondering if you can help me with a
                      problem I've been having.</div>
                    <div class="small text-gray-500 message-time font-weight-bold">Udin Cilok · 58m</div>
                  </a>
                </div>
                <div class="customer-message align-items-center">
                  <a href="#">
                    <div class="text-truncate message-title">But I must explain to you how all this mistaken idea
                    </div>
                    <div class="small text-gray-500 message-time">Nana Haminah · 58m</div>
                  </a>
                </div>
                <div class="customer-message align-items-center">
                  <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>
                    <div class="small text-gray-500 message-time font-weight-bold">Jajang Cincau · 25m</div>
                  </a>
                </div>
                <div class="customer-message align-items-center">
                  <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis
                    </div>
                    <div class="small text-gray-500 message-time font-weight-bold">Udin Wayang · 54m</div>
                  </a>
                </div>
                <div class="card-footer text-center">
                  <a class="m-0 small text-primary card-link" href="#">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Row-->

        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Apakah Anda akan logout?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="logout.php" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!---Container Fluid-->
    </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>copyright &copy; <script>
              document.write(new Date().getFullYear());
            </script> - developed by
            <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
          </span>
        </div>
      </div>
    </footer>
    <!-- Footer -->
  </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="assets/template/admin/vendor/jquery/jquery.min.js"></script>
  <script src="assets/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/template/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/template/admin/js/ruang-admin.min.js"></script>
  <script src="assets/template/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="assets/template/admin/js/demo/chart-area-demo.js"></script>
</body>

</html>