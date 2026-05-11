<?php

// Memulai session
session_start();

/** @var mysqli $conn */
// Memberitahu VS Code bahwa $conn adalah object mysqli

// Mengecek apakah user sudah login
if (!isset($_SESSION['username'])) {

    // Jika belum login maka kembali ke halaman login
    header("Location: ../../login.php");

    // Menghentikan proses
    exit;
}

// Menghubungkan database
include '../../koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Pengaturan karakter -->
    <meta charset="utf-8">

    <!-- Kompatibilitas browser -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Deskripsi -->
    <meta name="description" content="">

    <!-- Author -->
    <meta name="author" content="">

    <!-- Judul -->
    <title>Data Supplier | SIMASKIR</title>

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

    <!-- Wrapper -->
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

                    <!-- Card -->
                    <div class="card mb-4">

                        <!-- Header Card -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                            <!-- Judul -->
                            <h6 class="m-0 font-weight-bold text-primary">
                                Data Supplier
                            </h6>

                            <!-- Tombol Tambah -->
                            <button type="button"
                                class="btn btn-sm btn-primary"
                                data-toggle="modal"
                                data-target="#modalTambahSupplier">

                                <i class="fas fa-plus"></i>
                                Tambah Supplier

                            </button>

                            <!-- Modal Tambah -->
                            <?php include 'tambah_supplier.php'; ?>

                        </div>

                        <!-- Body Card -->
                        <div class="card-body">

                            <!-- Table Responsive -->
                            <div class="table-responsive">

                                <!-- Tabel Supplier -->
                                <table class="table table-bordered table-hover">

                                    <!-- Header Tabel -->
                                    <thead class="thead-light">

                                        <tr>

                                            <th width="5%">No</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat</th>
                                            <th>No. Telepon</th>
                                            <th width="15%">Aksi</th>

                                        </tr>

                                    </thead>

                                    <!-- Body Tabel -->
                                    <tbody>

                                        <?php

                                        // Nomor urut
                                        $no = 1;

                                        // Query supplier
                                        $query = mysqli_query($conn, "
                                            SELECT * FROM supplier
                                            ORDER BY id_supplier DESC
                                        ");

                                        // Perulangan data
                                        while ($data = mysqli_fetch_assoc($query)) :

                                        ?>

                                            <tr>

                                                <!-- Nomor -->
                                                <td>
                                                    <?= $no++; ?>
                                                </td>

                                                <!-- Nama Supplier -->
                                                <td>
                                                    <?= $data['nama_supplier']; ?>
                                                </td>

                                                <!-- Alamat -->
                                                <td>
                                                    <?= $data['alamat']; ?>
                                                </td>

                                                <!-- Telepon -->
                                                <td>
                                                    <?= $data['telepon']; ?>
                                                </td>

                                                <!-- Tombol Aksi -->
                                                <td>

                                                    <!-- Tombol Edit -->
                                                    <button type="button"
                                                        class="btn btn-sm btn-warning"
                                                        data-toggle="modal"
                                                        data-target="#editSupplier<?= $data['id_supplier']; ?>">

                                                        <i class="fas fa-edit"></i>

                                                    </button>

                                                    <!-- Modal Edit -->
                                                    <?php include 'edit-supplier.php'; ?>

                                                    <!-- Tombol Hapus -->
                                                    <button type="button"
                                                        class="btn btn-sm btn-danger btn-hapus"
                                                        data-id="<?= $data['id_supplier']; ?>">

                                                        <i class="fas fa-trash"></i>

                                                    </button>

                                                </td>

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
                            Copyright &copy; - SIMASKIR
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

    <!-- Sweet Alert Tambah -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 'tambah') : ?>

        <script>

            Swal.fire({

                icon: 'success',
                title: 'Berhasil!',
                text: 'Data supplier berhasil ditambahkan',
                showConfirmButton: false,
                timer: 2000

            });

            // Menghapus parameter URL
            window.history.replaceState({}, document.title, window.location.pathname);

        </script>

    <?php endif; ?>


    <!-- Sweet Alert Update -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 'update') : ?>

        <script>

            Swal.fire({

                icon: 'success',
                title: 'Berhasil!',
                text: 'Data supplier berhasil diupdate',
                showConfirmButton: false,
                timer: 2000

            });

            // Menghapus parameter URL
            window.history.replaceState({}, document.title, window.location.pathname);

        </script>

    <?php endif; ?>


    <!-- Sweet Alert Hapus -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 'hapus') : ?>

        <script>

            Swal.fire({

                icon: 'success',
                title: 'Berhasil!',
                text: 'Data supplier berhasil dihapus',
                showConfirmButton: false,
                timer: 2000

            });

            // Menghapus parameter URL
            window.history.replaceState({}, document.title, window.location.pathname);

        </script>

    <?php endif; ?>


    <!-- Konfirmasi Hapus -->
    <script>

        // Event tombol hapus
        $('.btn-hapus').click(function () {

            // Mengambil ID supplier
            const id = $(this).data('id');

            // SweetAlert konfirmasi
            Swal.fire({

                title: 'Yakin hapus data?',
                text: 'Data supplier akan dihapus permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e74a3b',
                cancelButtonColor: '#858796',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'

            }).then((result) => {

                // Jika user klik hapus
                if (result.isConfirmed) {

                    // Redirect ke proses hapus
                    window.location.href =
                        'proses_supplier.php?hapus=true&id=' + id;

                }

            });

        });

    </script>

</body>

</html>