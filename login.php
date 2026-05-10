<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMASKIR - Login</title>

    <!-- Bootstrap -->
    <link href="assets/template/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/template/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Ruang Admin -->
    <link href="assets/template/admin/css/ruang-admin.min.css" rel="stylesheet">

    <link href="assets/template/admin/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="login-card">
        <!-- Header -->
        <div class="text-center mb-3">
            <h1 class="brand-title">SIMASKIR</h1>

            <div class="brand-subtitle">
                Toko Grosir A Jajang
            </div>
        </div>

        <div class="brand-desc text-center mb-4">
    Sistem Manajemen Stok & Kasir berbasis Web
</div>

<div class="divider"></div>

<?php if (isset($_GET['error'])) : ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fas fa-exclamation-circle"></i>
    Username atau password salah!

    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>

<?php endif; ?>

<!-- Form -->
<form action="proses.php" method="POST">

    <div class="form-group">

        <!-- Username -->
        <div class="input-group">

            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user"></i>
                </span>
            </div>

            <input type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan username"
                required>

        </div>

        <!-- Password -->
        <div class="input-group mt-4">

            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                </span>
            </div>

            <input type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                required>

        </div>

    </div>

    <!-- Button -->
    <div class="mt-4">

        <button type="submit"
            name="login"
            class="btn btn-primary btn-block btn-login">
            Masuk
        </button>
          <span id="loadingLogin" style="display: none;">
        <span class="spinner-border spinner-border-sm"></span>
        Loading...
    </span>

    </div>

</form>
        <div class="text-center mt-3">
            <a href="forgot-password.php" class="forgot-link">
                Lupa Kata Sandi?
            </a>
        </div>
    </div>
    <!-- JS -->
    <script src="assets/template/admin/vendor/jquery/jquery.min.js"></script>
    <script src="assets/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/template/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/template/admin/js/ruang-admin.min.js"></script>

</body>

</html>