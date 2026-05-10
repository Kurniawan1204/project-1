<div id="content">
  <!-- TopBar -->
  <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">

    <!-- Sidebar Toggle -->
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
    <!-- Right Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Notification -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <i class="fas fa-bell fa-fw"></i>

          <!-- Badge -->
          <span class="badge badge-danger badge-counter">
            3+
          </span>
        </a>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- User -->
      <li class="nav-item dropdown no-arrow">

        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
          role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">

          <img class="img-profile rounded-circle"
            src="/simaskir_1/assets/template/admin/img/boy.png"
            style="max-width: 45px">

          <span class="ml-2 d-none d-lg-inline text-white small">
            ADMIN
          </span>
        </a>

        <!-- Dropdown User -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
          aria-labelledby="userDropdown">

          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>

          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
          </a>

          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="javascript:void(0);"
            data-toggle="modal" data-target="#logoutModal">

            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>

        </div>
      </li>
    </ul>
  </nav>
  <!-- Topbar -->