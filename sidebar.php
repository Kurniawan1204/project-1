<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

  <!-- Logo -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/simaskir_1/index.php">

    <div class="sidebar-brand-icon">
      <i class="fas fa-store-alt"></i>
    </div>
    <div class="sidebar-brand-text mx-2">
      SIMASKIR
    </div>
  </a>
  <hr class="sidebar-divider my-0">
  <!-- Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="/simaskir_1/index.php">
      <i class="fas fa-home"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    MASTER DATA
  </div>

  <!-- Produk -->
  <li class="nav-item">
    <a class="nav-link collapsed"
      data-toggle="collapse"
      data-target="#collapseProduk"
      aria-expanded="true"
      aria-controls="collapseProduk">

      <i class="fas fa-box-open"></i>
      <span>Produk</span>
    </a>

    <div id="collapseProduk" class="collapse"
      aria-labelledby="headingProduk"
      data-parent="#accordionSidebar">

      <div class=" py-2 collapse-inner rounded">

        <a class="collapse-item" href="/simaskir_1/crud/produk/index_produk.php">
          Data Produk
        </a>

        <a class="collapse-item" href="/simaskir_1/crud/kategori/index_kategori.php">
          Kategori Produk
        </a>
        </a>

      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="/simaskir_1/crud/transaksi/index_kasir.php"
      data-toggle="collapse">
      <i class="fas fa-cash-register"></i>
      <span>Kasir</span>
    </a>
  </li>
  <!-- Transaksi -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="/simaskir_1/crud/transaksi/index_transaksi.php"
      data-toggle="collapse"
      data-target="#collapseTransaksi"
      aria-expanded="true"
      aria-controls="collapseTransaksi">

      <i class="fas fa-cash-register"></i>
      <span>Transaksi</span>
    </a>

    <div id="collapseTransaksi" class="collapse"
      aria-labelledby="headingTransaksi"
      data-parent="#accordionSidebar">

      <div class=" py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu Transaksi</h6>

        <a class="collapse-item" href="#">
          Penjualan
        </a>

        <a class="collapse-item" href="#">
          Pembelian
        </a>
      </div>
    </div>
  </li>

  <!-- Manajemen Stok -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="/simaskir_1/crud/stok/index_stok.php"
      data-toggle="collapse"
      data-target="#collapseStok"
      aria-expanded="true"
      aria-controls="collapseStok">

      <i class="fas fa-warehouse"></i>
      <span>Manajemen Stok</span>
    </a>

    <div id="collapseStok" class="collapse"
      aria-labelledby="headingStok"
      data-parent="#accordionSidebar">

      <div class=" py-2 collapse-inner rounded">
        <h6 class="collapse-header">Stok Barang</h6>

        <a class="collapse-item" href="#">
          Data Stok
        </a>

        <a class="collapse-item" href="#">
          Stok Masuk
        </a>

        <a class="collapse-item" href="#">
          Stok Keluar
        </a>
      </div>
    </div>
  </li>

  <!-- Pelanggan -->
  <li class="nav-item">
    <a class="nav-link" href="/simaskir_1/crud/pelanggan/index_pelanggan.php">
      <i class="fas fa-users"></i>
      <span>Pelanggan</span>
    </a>
  </li>

  <!-- Supplier -->
  <li class="nav-item">
    <a class="nav-link" href="/simaskir_1/crud/supplier/index_supplier.php">
      <i class="fas fa-truck"></i>
      <span>Supplier</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    LAPORAN
  </div>

  <!-- Laporan -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="/simaskir_1/crud/laporan/index_laporan.php"
      data-toggle="collapse"
      data-target="#collapseLaporan"
      aria-expanded="true"
      aria-controls="collapseLaporan">

      <i class="fas fa-chart-line"></i>
      <span>Laporan</span>
    </a>

    <div id="collapseLaporan" class="collapse"
      aria-labelledby="headingLaporan"
      data-parent="#accordionSidebar">

      <div class=" py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Laporan</h6>

        <a class="collapse-item" href="#">
          Laporan Penjualan
        </a>

        <a class="collapse-item" href="#">
          Laporan Pembelian
        </a>

        <a class="collapse-item" href="#">
          Laporan Stok
        </a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <div> simaskir 1.1 </div>
</ul>
<!-- Sidebar -->