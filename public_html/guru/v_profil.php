<?php
include 'views/setting.php';
require '../../library/aes.class.php';     // AES PHP implementation
require '../../library/aesctr.class.php';  // AES Counter Mode implementation
$query = $mysqli->query("SELECT * FROM tb_siswa WHERE id_siswa='$_SESSION[id_siswa]'");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords"
  content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
  <meta name="description"
  content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
  <meta name="robots" content="noindex,nofollow">
  <title>My Profil</title>

  <?php include 'views/css.php'; ?>
</head>

<body>
  <?php include 'views/navbar.php'; ?>

  <?php include 'views/sidebar.php'; ?>
  <!-- ============================================================== -->
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <div class="d-md-flex">
            <ol class="breadcrumb ms-auto">
              <li><a href="#" class="fw-normal">My Profil</a></li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.col-lg-12 -->
      <div class="col-sm-12">
          <?php if (isset($_GET['alert'])) {
            if ($_GET['alert']==1) {
              echo "<div class='alert alert-success' role='alert'>";
              echo $_GET['message'];
            } else {
              echo "<div class='alert alert-danger' role='alert'>";
              echo $_GET['message'];
            }
          } ?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <!-- Row -->
      <div class="row">
        <!-- Column -->
        <div class="col-lg-4">
          <div class="white-box">
            <div class="user-bg">
              <div class="overlay-box">
                <div class="user-content">
                  <h4 class="text-white"><?= $myprofil->fname; ?> <?= $myprofil->lname; ?></h4>
                  <h5 class="text-white"><?= $myprofil->email; ?></h5>
                  <?php if ($myprofil->jenis_kelamin=='L'): ?>
                    <h5 class="text-white">Laki-laki</h5>
                  <?php else: ?>
                    <h5 class="text-white">Perempuan</h5>
                  <?php endif; ?>
                  <?php if ($myprofil->jenis_kelamin=='T'): ?>
                    <h5 class="text-success">Status Mengajar : TETAP</h5>
                  <?php else: ?>
                    <h5 class="text-danger">Status Mengajar : HONORER</h5>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-12">
          <div class="card">
            <div class="card-body">
              <form class="form-horizontal form-material" action="../controller/profil/guru.php" method="post">
                <div class="form-group mb-4">
                  <label class="col-md-12 p-0">Nama Depan</label>
                  <div class="col-md-12 border-bottom p-0">
                    <input type="text" readonly placeholder="<?= $myprofil->fname ?>" name="fname" value="<?= $myprofil->fname; ?>"
                    class="form-control p-0 border-0">
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label class="col-md-12 p-0">Nama Depan</label>
                  <div class="col-md-12 border-bottom p-0">
                    <input type="text" readonly placeholder="<?= $myprofil->lname ?>" name="lname" value="<?= $myprofil->lname; ?>"
                    class="form-control p-0 border-0">
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label class="col-md-12 p-0">Jenis Kelamin</label>
                  <div class="col-md-12 border-bottom p-0">
                    <select class="form-control p-0 border-0"name="jk">
                      <?php if ($myprofil->jenis_kelamin=='L'): ?>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      <?php else: ?>
                        <option value="P">Perempuan</option>
                        <option value="L">Laki-laki</option>
                      <?php endif; ?>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="id" value="<?= $_SESSION['id_guru']; ?>">
                <div class="form-group mb-4">
                  <label for="example-email" class="col-md-12 p-0">Email</label>
                  <div class="col-md-12 border-bottom p-0">
                    <input type="email" placeholder="<?= $myprofil->email; ?>" value="<?= $myprofil->email; ?>"
                    class="form-control p-0 border-0" name="email">
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label class="col-md-12 p-0">Password</label>
                  <div class="col-md-12 border-bottom p-0">
                    <input type="password" value="<?= $myprofil->password; ?>" name="password" class="form-control p-0 border-0">
                  </div>
                  <br>
                  <div class="form-group mb-4">
                    <div class="col-sm-12">
                      <button class="btn btn-success">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <?php include 'views/footer.php'; ?>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <?php include 'views/js.php'; ?>
</body>

</html>
