<?php
include 'views/setting.php';
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
  <title>Tambah Data Siswa</title>

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
              <li><a href="#" class="fw-normal">Data Siswa</a></li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <?php if (isset($_GET['alert'])) {
            if ($_GET['alert']==1) {
              echo "<div class='alert alert-success' role='alert'>";
              echo $_GET['myalert'];
            } else {
              echo "<div class='alert alert-danger' role='alert'>";
              echo $_GET['myalert'];
            }
          } ?>
        </div>
        <div class="white-box">
          <h3 class="box-title">Tambah Data Siswa</h3>
          <div class="row col-lg-12">
            <form action="../controller/siswa/add_siswa.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Nama Depan</label>
                  <input type="text" class="form-control" name="fname" placeholder="Nama depan" required>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Nama Belakang</label>
                  <input type="text" class="form-control" name="lname" placeholder="Nama belakang" required>
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option value="L">LAKI-LAKI</option>
                    <option value="P">PEREMPUAN</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
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
