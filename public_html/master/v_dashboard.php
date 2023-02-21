<?php include 'views/setting.php'; ?>
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
  <title>Dashboard</title>

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
              <li><a href="#" class="fw-normal">Dashboard</a></li>
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
      <!-- ============================================================== -->
      <!-- Three charts -->
      <!-- ============================================================== -->
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
          <div class="white-box analytics-info">
            <?php $guru = $mysqli->query("SELECT COUNT(id_guru) as total FROM tb_guru WHERE roles='1'"); ?>
            <?php $total_guru = $guru->fetch_object(); ?>
            <h3 class="box-title">Total Guru</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
              <li>
                <div id="sparklinedash"><canvas width="67" height="30"
                  style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                </div>
              </li>
              <li class="ms-auto"><span class="counter text-success"><?= $total_guru->total; ?></span></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="white-box analytics-info">
            <?php $matkul = $mysqli->query("SELECT COUNT(id_matkul) as total FROM tb_matkul"); ?>
            <?php $total_matkul = $matkul->fetch_object(); ?>
            <h3 class="box-title">Total Matapelajaran</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
              <li>
                <div id="sparklinedash2"><canvas width="67" height="30"
                  style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                </div>
              </li>
              <li class="ms-auto"><span class="counter text-purple"><?= $total_matkul->total; ?></span></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="white-box analytics-info">
            <?php $siswa = $mysqli->query("SELECT COUNT(id_siswa) as total FROM tb_siswa"); ?>
            <?php $total_siswa = $siswa->fetch_object(); ?>
            <h3 class="box-title">Total Siswa</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
              <li>
                <div id="sparklinedash3"><canvas width="67" height="30"
                  style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                </div>
              </li>
              <li class="ms-auto"><span class="counter text-info"><?= $total_siswa->total; ?></span>
              </li>
            </ul>
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
