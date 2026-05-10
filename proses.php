<?php
session_start();
include 'koneksi.php';

// jika sudah login
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// proses login
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // cek username
    $query = mysqli_query($conn,
        "SELECT * FROM user WHERE username='$username'");

    // jika username ditemukan
    if (mysqli_num_rows($query) > 0) {

        $data = mysqli_fetch_assoc($query);

        // cek password
        if ($password == $data['password']) {

            // simpan session login
            $_SESSION['username'] = $data['username'];

            // alert login berhasil
            $_SESSION['success'] = "Login berhasil, selamat datang di SIMASKIR";

            // redirect dashboard
            header("Location: index.php");
            exit;

        } else {

            // password salah
            header("Location: login.php?error=password");
            exit;

        }

    } else {

        // username tidak ditemukan
        header("Location: login.php?error=username");
        exit;

    }
}
?>