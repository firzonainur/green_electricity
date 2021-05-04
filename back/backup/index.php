<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
<body>
  <div class="wrapper ">
    <?php require 'layout/sidebar.php'; ?>
    <div class="main-panel">

      <!-- navbar -->
      <?php require 'layout/navbar.php'; ?>
      <!-- end navbar -->

      <!-- Content Here -->
      <?php 
      if (isset($_GET['url'])){
      $url = $_GET['url'];

  switch ($url) {
    case 'dashboard':
      include 'layout/content_dashboard.php';
      break;

    case 'siswa':
      include 'layout/content_siswa.php';
      break;

    case 'mentor':
      include 'layout/content_mentor.php';
      break;

     case 'raport':
      include 'layout/content_raport.php';
      break;

     case 'detailRapor':
      include 'layout/content_raport_daftar.php';
      break;
     
     case 'jadwal':
      include 'layout/content_jadwal.php';
      break;

     case 'absen':
      include 'layout/content_absensi.php';
      break;

    case 'pesan':
      include 'layout/content_pesan.php';
      break;

     case 'manualBook':
      include 'layout/content_manualBook.php';
      break;

     case 'profile':
      include 'layout/content_profile.php';
      break;

    case 'setting_landingpage':
      include 'layout/content_setting_landingpage.php';
      break;

    case 'setting_header':
      include 'layout/content_setting_header.php';
      break;

    case 'setting_footer':
      include 'layout/content_setting_footer.php';
      break;

    case 'error':
      include 'layout/error.php';
      break;
      
    case 'detail':
      include 'layout/content_siswaDetail.php';
      break;

    case 'tugas':
      include 'layout/content_tugas.php';
      break;

    case 'materi':
      include 'layout/content_materi.php';
      break;

    case 'nilai':
      include 'layout/content_nilai.php';
      break;

    default:
      include 'layout/content_dashboard.php';
      break;
  }
} else{
  include 'layout/content_dashboard.php';
}
       ?>
      <!-- End Content Here -->

      <!-- footer here -->
      <?php require 'layout/footer.php'; ?>
      <!-- end footer here -->

       <!-- plugin here -->
      <?php require 'layout/plugin.php'; ?>
      <!-- end plugin here -->

    </div>
  </div>

  <!-- javascript -->
  <?php include 'layout/js.php'; ?>
</body>

</html>