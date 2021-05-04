<!DOCTYPE html>
<html lang="en">
  <head>
   <?php require 'partials/_head.php'; ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php require 'partials/_navbar.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php require 'partials/_sidebar.php';  ?>
        <!-- partial -->
        <div class="main-panel">
            <?php require 'content/aktivitas.php';  ?>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            <?php require 'partials/_footer.php';  ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php require 'partials/_javascript.php';  ?>
  </body>
</html>