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
        <div class="d-flex align-items-center mb-3">
            <div class="logo-box">
                SIM
            </div>
            <div class="ml-3">
                <h1 class="brand-title">SIMASKIR</h1>
                <div class="brand-subtitle">
                    Toko Grosir A Jajang
                </div>
            </div>

        </div>

        <div class="brand-desc">
            Sistem Manajemen Stok & Kasir berbasis Web
        </div>
        <div class="divider"></div>

        <!-- Form -->
        <form action="dashboard.php?login" method="POST">

            <div class="form-group">
                <label class="form-label">
                    Username
                </label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            <div class="form-group mt-4">
                <label class="form-label">
                    Password
                </label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <div class="mt-4">
                <button type="submit"
                        class="btn btn-primary btn-block btn-login">
                    Masuk ke Sistem
                </button>
            </div>
        </form>
          <div class="text-center mt-3">
              <a href="forgot-password.php" class="forgot-link">
                  Lupa Kata Sandi?
              </a>
          </div>

    <!-- JS -->
    <script src="assets/template/admin/vendor/jquery/jquery.min.js"></script> 
    <script src="assets/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    <script src="assets/template/admin/vendor/jquery-easing/jquery.easing.min.js"></script> 
    <script src="assets/template/admin/js/ruang-admin.min.js"></script>

</body>

</html>