<?php
session_start(); // Wajib di baris paling atas
/** @var mysqli $conn */ // Baris ini memberitahu VS Code bahwa $conn itu ada

include '../../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_kategori = $_POST['nama_kategori'];
    $query = mysqli_query($conn, "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')");

    if ($query) {
        $_SESSION['sukses'] = "Kategori $nama_kategori berhasil ditambahkan!";
    } else {
        $_SESSION['error'] = "Gagal menyimpan data!";
    }
    header("Location: index_kategori.php");
    exit();
}

// Edit Kategori
if (isset($_POST['update'])) {

    $id_kategori   = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    $query = mysqli_query($conn, "
        UPDATE kategori 
        SET nama_kategori='$nama_kategori'
        WHERE id_kategori='$id_kategori'
    ");

    if ($query) {

        $_SESSION['sukses'] = "Kategori berhasil diupdate!";

    } else {

        $_SESSION['error'] = "Gagal update kategori!";

    }

    header("Location: index_kategori.php");
    exit();
}


// Hapus Kategori
if (isset($_GET['hapus'])) {

    $id_kategori = $_GET['id'];

    // cek apakah kategori dipakai produk
    $cek = mysqli_query($conn, "
        SELECT * FROM produk
        WHERE id_kategori='$id_kategori'
    ");

    if (mysqli_num_rows($cek) > 0) {

        $_SESSION['error'] =
            "Kategori tidak bisa dihapus karena masih memiliki produk!";

    } else {

        $hapus = mysqli_query($conn, "
            DELETE FROM kategori
            WHERE id_kategori='$id_kategori'
        ");

        if ($hapus) {

            $_SESSION['sukses'] =
                "Kategori berhasil dihapus!";

        } else {

            $_SESSION['error'] =
                "Gagal menghapus kategori!";

        }
    }

    header("Location: index_kategori.php");
    exit();
}