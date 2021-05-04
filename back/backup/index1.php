<!doctype html>
<html lang="en">

<?php //require 'partials/header.php'; ?>

<body>
  <div class="wrapper ">
    <?php require 'partials/_sidebar.php'; ?>

      <!-- navbar -->
      <?php require 'partials/_navbar.php'; ?>
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
      <?php require 'partials/_footer.php'; ?>
      <!-- end footer here -->

       <!-- plugin here -->
      <?php //require 'layout/plugin.php'; ?>
      <!-- end plugin here -->

    </div>
  </div>

  <!-- javascript -->
  <?php //include 'layout/js.php'; ?>
</body>

</html>