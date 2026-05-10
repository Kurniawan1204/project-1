<?php
session_start();
/** @var mysqli $conn */ // Baris ini memberitahu VS Code bahwa $conn itu ada
if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
    exit;
}

include '../../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Produk | SIMASKIR</title>

    <!-- Icon -->
    <!-- <link href="../../assets/template/admin/img/logo/logo.png" rel="icon"> -->

    <!-- Font Awesome -->
    <link href="../../assets/template/admin/vendor/fontawesome-free/css/all.min.css"
        rel="stylesheet"
        type="text/css">

    <!-- Bootstrap -->
    <link href="../../assets/template/admin/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet"
        type="text/css">

    <!-- Template CSS -->
    <link href="../../assets/template/admin/css/ruang-admin.min.css"
        rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include '../../sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Navbar -->
                <?php include '../../navbar.php'; ?>

                <!-- Container -->
                <div class="container-fluid" id="container-wrapper">

                    <!-- Header -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h1 class="h3 mb-0 text-gray-800">
                                Data Produk
                            </h1>                        
                        </div>                       
                    </div> -->

                    <!-- Card -->
                    <div class="card mb-4">

                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Data Produk & stok
                            </h6>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalTambahProduk">
                            <i class="fas fa-plus"></i> Tambah Produk
                            </button>
                            <?php include 'tambah-produk.php'; ?>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered table-hover">

                                    <thead class="thead-light">
                                        <tr>
                                            <th>Kode Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>                                            
                                            <th>Satuan</th>                                    
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $no = 1;

                                        $query = mysqli_query($conn, "
                                            SELECT * FROM produk
                                            ORDER BY id_produk DESC
                                        ");
                                        $query = mysqli_query($conn, "
                                            SELECT 
                                                produk.*, 
                                                kategori.nama_kategori
                                            FROM produk
                                            JOIN kategori 
                                            ON produk.id_kategori = kategori.id_kategori
                                        ");
                                        while ($data = mysqli_fetch_assoc($query)) :
                                        ?>

                                            <tr>                                          
                                                <td>
                                                    <?= $data['kode_produk']; ?>
                                                </td>

                                                <td>
                                                    <?= $data['nama_produk']; ?>
                                                </td>

                                                <td>
                                                    <?= $data['nama_kategori']; ?>
                                                </td>

                                                <td>
                                                    Rp <?= number_format($data['harga_beli'], 0, ',', '.'); ?>
                                                </td>

                                                <td>
                                                    Rp <?= number_format($data['harga_jual'], 0, ',', '.'); ?>
                                                </td>

                                                <td>
                                                    <?= $data['stok']; ?>
                                                </td>

                                                <td>
                                                    <?= $data['satuan']; ?>
                                                </td>

                                                <td>

                                                    <button 
    type="button"
    class="btn btn-sm btn-warning"
    data-toggle="modal"
    data-target="#editProduk<?= $data['id_produk']; ?>">

    <i class="fas fa-edit"></i>
</button>

<?php include 'edit-produk.php'; ?>
                                                  <button
    type="button"
    class="btn btn-sm btn-danger btn-hapus"
    data-id="<?= $data['id_produk']; ?>">

    <i class="fas fa-trash"></i>

</button>                        </td>
                                            </tr>

                                        <?php endwhile; ?>

                                    </tbody>

                                </table>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- End Container -->

            </div>
            <!-- End Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">

                    <div class="copyright text-center my-auto">

                        <span>
                            Copyright &copy;
                            - SIMASKIR
                        </span>

                    </div>

                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Content Wrapper -->

    </div>
    <!-- End Wrapper -->

    <!-- Scroll Top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JQuery -->
    <script src="../../assets/template/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../assets/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery Easing -->
    <script src="../../assets/template/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Template JS -->
    <script src="../../assets/template/admin/js/ruang-admin.min.js"></script>

  <!-- Sweet Alert Update -->
<?php if (isset($_GET['success']) && $_GET['success'] == 'update') : ?>

<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Data produk berhasil diupdate',
        showConfirmButton: false,
        timer: 2000
    });
</script>

<?php endif; ?>


<!-- Sweet Alert Hapus -->
<?php if (isset($_GET['success']) && $_GET['success'] == 'hapus') : ?>

<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Data produk berhasil dihapus',
        showConfirmButton: false,
        timer: 2000
    });
</script>

<?php endif; ?>


<!-- Konfirmasi Hapus -->
<script>

    $('.btn-hapus').click(function () {

        const id = $(this).data('id');

        Swal.fire({
            title: 'Yakin hapus data?',
            text: "Data produk akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74a3b',
            cancelButtonColor: '#858796',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {

            if (result.isConfirmed) {

                window.location.href =
                    'proses_produk.php?hapus=true&id=' + id;

            }

        });

    });

</script>
</body>

</html>