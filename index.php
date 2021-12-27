<?php
// Title		: Sistem Informasi Mahasiswa 
// Date			: 21 Desember 2021
// Update		: -
// Editor 		: L9kyuu
// Email 		: Mail.latif09@gmail.com
// Versi 		: 1.0

include 'config/koneksi.php';
include 'config/tgl_indo.php';
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'view/header.php'; ?>
<!-- /.Head -->

<body class="sidebar-mini layout-footer-fixed sidebar-collapse">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo $link_web ?>/file/web/unism.jpg" alt="SPMI UNISM" height="300" width="300" />
    </div> -->
    <!-- Navbar -->
    <?php include 'view/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'view/menu.php' ?>
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <?php include 'page/page.php' ?>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <?php include 'view/footer.php' ?>
    <!-- /.footer -->