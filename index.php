<?php
  require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</head>
<body>
    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php?p=data_mhs" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Data Mahasiswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?p=add_mhs" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Tambah Mahasiswa
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <?php
                  $pages_dir = 'pages';
                  if(!empty($_GET['p'])){
                    $pages = scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);
                    $p = $_GET['p'];
                    if(in_array($p . '.php' , $pages)){
                      include(($pages_dir . '/' . $p . '.php'));
                    } else {
                      echo "Halaman tidak ditemukan";
                    } 
                  } else {
                    include ($pages_dir . '/beranda.php');
                  }
                ?>
              </div>
            </div>
        </div>
    </div>

</body>
</html>