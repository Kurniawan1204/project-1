<?php
session_start();

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
    <title>Data Kategori | SIMASKIR</title>

    <!-- <link href="../../assets/template/admin/img/logo/logo.png" rel="icon"> -->
    <link href="../../assets/template/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/template/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/template/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<body id="page-top">
    <div id="wrapper">
        <?php include '../../sidebar.php'; ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include '../../navbar.php'; ?>

                <div class="container-fluid" id="container-wrapper">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalTambahKategori">
                                <i class="fas fa-plus"></i> Tambah Kategori
                            </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="10%">No</th>                                          
                                            <th>Nama Kategori</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        /** @var mysqli $conn */ // Baris ini memberitahu VS Code bahwa $conn itu ada
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                        while ($data = mysqli_fetch_assoc($query)) :
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>                                     
                                                <td><?= $data['nama_kategori']; ?></td>
                                                <td>

    <!-- Tombol Edit -->
    <button
        type="button"
        class="btn btn-sm btn-warning"
        data-toggle="modal"
        data-target="#editKategori<?= $data['id_kategori']; ?>">

        <i class="fas fa-edit"></i>

    </button>

    <!-- Tombol Hapus -->
    <button
        type="button"
        class="btn btn-sm btn-danger btn-hapus"
        data-id="<?= $data['id_kategori']; ?>">

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
            </div>

            <?php include 'tambah-kategori.php'; ?>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; - SIMASKIR</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <script src="../../assets/template/admin/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/template/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../assets/template/admin/js/ruang-admin.min.js"></script>
    <?php if (isset($_SESSION['sukses'])): ?>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: '<?php echo $_SESSION['sukses']; ?>',
        icon: 'success',
        timer: 2000,
        showConfirmButton: false
    });
</script>
<?php unset($_SESSION['sukses']); endif; ?>

<?php if (isset($_SESSION['error'])): ?>
<script>
    Swal.fire({
        title: 'Gagal!',
        text: '<?php echo $_SESSION['error']; ?>',
        icon: 'error',
        confirmButtonText: 'OK'
    });
</script>
<?php unset($_SESSION['error']); endif; ?>

<script>

    $('.btn-hapus').click(function () {

        const id = $(this).data('id');

        Swal.fire({
            title: 'Yakin hapus kategori?',
            text: "Data kategori akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74a3b',
            cancelButtonColor: '#858796',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {

            if (result.isConfirmed) {

                window.location.href =
                    'proses_kategori.php?hapus=true&id=' + id;

            }

        });

    });

</script>
</body>
</html>