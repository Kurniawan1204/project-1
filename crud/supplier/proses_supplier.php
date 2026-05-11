<?php
/** @var mysqli $conn */
// Memanggil koneksi database
include '../../koneksi.php';

// Jika tombol simpan ditekan
if (isset($_POST['simpan'])) {

    // Menangkap data dari form
    $nama_supplier = $_POST['nama_supplier'];
    $telepon       = $_POST['telepon'];
    $alamat        = $_POST['alamat'];

    // Query tambah data supplier
    $query = mysqli_query($conn, "
        INSERT INTO supplier (
            nama_supplier,
            telepon,
            alamat
        ) VALUES (
            '$nama_supplier',
            '$telepon',
            '$alamat'
        )
    ");

    // Jika query berhasil
    if ($query) {

        // Redirect dengan status sukses
        header("Location: index_supplier.php?success=tambah");

    } else {

        // Jika gagal
        echo "
            <script>
                alert('Data supplier gagal ditambahkan');
                window.location='index_supplier.php';
            </script>
        ";

    }


}

// Jika tombol update ditekan
if (isset($_POST['update'])) {

    // Menangkap data dari form
    $id_supplier   = $_POST['id_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $telepon       = $_POST['telepon'];
    $alamat        = $_POST['alamat'];

    // Query update supplier
    $query = mysqli_query($conn, "
        UPDATE supplier SET
            nama_supplier = '$nama_supplier',
            telepon = '$telepon',
            alamat = '$alamat'
        WHERE id_supplier = '$id_supplier'
    ");

    // Jika berhasil update
    if ($query) {

        // Redirect dengan status update
        header("Location: index_supplier.php?success=update");

    } else {

        // Jika gagal
        echo "
            <script>
                alert('Data supplier gagal diupdate');
                window.location='index_supplier.php';
            </script>
        ";

    }

}

// Jika tombol hapus dijalankan
if (isset($_GET['hapus'])) {

    // Mengambil id supplier dari URL
    $id_supplier = $_GET['id'];

    // Query hapus data supplier
    $query = mysqli_query($conn, "
        DELETE FROM supplier
        WHERE id_supplier = '$id_supplier'
    ");

    // Jika berhasil dihapus
    if ($query) {

        // Redirect kembali ke halaman supplier
        header("Location: index_supplier.php?success=hapus");

    } else {

        // Jika gagal hapus
        echo "
            <script>
                alert('Data supplier gagal dihapus');
                window.location='index_supplier.php';
            </script>
        ";

    }

}
?>