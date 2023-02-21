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
  <title>Master Mata pelajaran</title>

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
              <li><a href="#" class="fw-normal">Master Mata Pelajaran</a></li>
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
              echo $_GET['message'];
            } else {
              echo "<div class='alert alert-danger' role='alert'>";
              echo $_GET['message'];
            }
          } ?>
        </div>
        <div class="white-box">
          <h3 class="box-title">Master Kelas</h3>
          <a href="v_siswa_kelas.php?id=<?= $_GET['id']; ?>" class="btn btn-info text-white">Tambah Siswa</a>
          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th class="border-top-0">#</th>
                  <th class="text-center border-top-0">Nama Siswa</th>
                  <th class="text-center border-top-0">Jenis Kelamin</th>
                  <th class="text-center border-top-0">Email</th>
                  <th class="text-center border-top-0">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php  $data = $mysqli->query("SELECT * FROM tb_detail_kelas as tdk JOIN tb_siswa as tbs ON tbs.id_siswa=tdk.id_siswa WHERE tdk.id_kelas='$_GET[id]'"); ?>
                <?php $no = 0; ?>
                <?php while($value = $data->fetch_object()){ ?>
                  <tr>
                    <td><?= $no+=1; ?></td>
                    <td class="text-center"><?= $value->fname; ?> <?= $value->lname; ?></td>
                    <td class="text-center">
                      <?php if ($value->jenis_kelamin=='L'): ?>
                        Laki-laki
                      <?php else: ?>
                        Perempuan
                      <?php endif; ?>
                    </td>
                    <td class="text-center"><?= $value->email; ?></td>
                    <td class="text-center">
                      <a href="../controller/siswa_kelas/delete_siswa.php?id=<?= $value->id_siswa; ?>&id_kelas=<?= $_GET['id']; ?>" class="btn btn-danger text-white">Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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
