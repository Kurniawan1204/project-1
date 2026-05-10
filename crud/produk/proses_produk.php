<?php
include '../../koneksi.php';
/** @var mysqli $conn */ // Baris ini memberitahu VS Code bahwa $conn itu ada
// Tambah Produk
if (isset($_POST['simpan'])) {
    $kode_produk   = $_POST['kode_produk'];
    $nama_produk   = $_POST['nama_produk'];
    $id_kategori   = $_POST['id_kategori']; // Berupa angka ID
    $harga_beli    = $_POST['harga_beli'];
    $harga_jual    = $_POST['harga_jual'];
    $satuan        = $_POST['satuan'];
    $stok          = $_POST['stok'];
    $stok_minimal  = $_POST['stok_minimal'];

    $sql = "INSERT INTO produk (kode_produk, nama_produk, harga_beli, harga_jual, satuan, stok, stok_minimal, id_kategori) 
            VALUES ('$kode_produk', '$nama_produk', '$harga_beli', '$harga_jual', '$satuan', '$stok', '$stok_minimal', '$id_kategori')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Produk berhasil ditambahkan!');
                window.location.href='index_produk.php';
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Edit Produk
if (isset($_POST['update'])) {

    $id_produk     = $_POST['id_produk'];
    $kode_produk   = $_POST['kode_produk'];
    $nama_produk   = $_POST['nama_produk'];
    $id_kategori   = $_POST['id_kategori'];
    $harga_beli    = $_POST['harga_beli'];
    $harga_jual    = $_POST['harga_jual'];
    $stok          = $_POST['stok'];
    $stok_minimal  = $_POST['stok_minimal'];
    $satuan        = $_POST['satuan'];

    mysqli_query($conn, "
        UPDATE produk SET
            kode_produk   = '$kode_produk',
            nama_produk   = '$nama_produk',
            id_kategori   = '$id_kategori',
            harga_beli    = '$harga_beli',
            harga_jual    = '$harga_jual',
            stok          = '$stok',
            stok_minimal  = '$stok_minimal',
            satuan        = '$satuan'
        WHERE id_produk = '$id_produk'
    ");

    header("Location: index_produk.php?success=update");
    exit;
}


// Hapus Produk
// Hapus Produk
if (isset($_GET['hapus'])) {

    $id_produk = $_GET['id'];

    $sql = "DELETE FROM produk WHERE id_produk='$id_produk'";

    if (mysqli_query($conn, $sql)) {

        header("Location: index_produk.php?success=hapus");
        exit;

    } else {

        echo "Error: " . mysqli_error($conn);

    }
}
// 
?>