<?php
include 'views/setting.php';

$data_kelas = $mysqli->query("SELECT * FROM tb_kelas as tbk JOIN tb_guru as tbg ON tbg.id_guru=tbk.id_guru JOIN tb_matkul as tbm ON tbm.id_matkul=tbk.id_matkul WHERE tbk.id_kelas='$_GET[id]'");
$kelasData = $data_kelas->fetch_object();

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
  <title>Edit Data kelas</title>
  <!-- css untuk select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- jika menggunakan bootstrap4 gunakan css ini  -->
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
  <!-- cdn bootstrap4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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
              <li><a href="#" class="fw-normal">Data kelas</a></li>
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
          <h3 class="box-title">Edit Data kelas</h3>
          <div class="row col-lg-12">
            <form action="../controller/kelas/edit_kelas.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Matapelajaran</label>
                  <?php $query_mapel = $mysqli->query('SELECT * FROM tb_matkul'); ?>
                  <select class="form-control" id="mapel" name="id_matkul">
                    <option value="<?= $kelasData->id_matkul; ?>"><?= $kelasData->kode_matkul; ?> - <?= $kelasData->nama_matkul; ?></option>
                    <?php while ($data = $query_mapel->fetch_object()) {?>
                      <?php if ($data->id_matkul!=$kelasData->id_matkul): ?>
                        <option value="<?= $data->id_matkul; ?>"><?= $data->kode_matkul; ?> - <?= $data->nama_matkul; ?></option>
                      <?php endif; ?>
                    <?php  } ?>
                  </select>
                </div>
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Nama Guru</label>
                  <?php $query_guru = $mysqli->query("SELECT * FROM tb_guru WHERE roles='1'"); ?>
                  <select class="form-control" id="guru" name="id_guru">
                    <option value="<?= $kelasData->id_guru; ?>"><?= $kelasData->fname; ?> <?= $kelasData->lname; ?></option>
                    <?php while ($data = $query_guru->fetch_object()) {?>
                      <?php if ($data->id_guru!=$kelasData->id_guru): ?>
                        <option value="<?= $data->id_guru; ?>"><?= $data->fname; ?> <?= $data->lname; ?></option>
                      <?php endif; ?>
                    <?php  } ?>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Waktu Mulai</label>
                  <input type="time" class="form-control" name="wkt_mulai" value="<?= $kelasData->waktu_mulai; ?>" placeholder="Waktu Mulai" required>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Waktu Akhir</label>
                  <input type="time" class="form-control" name="wkt_akhir" value="<?= $kelasData->waktu_selesai; ?>" placeholder="Waktu Akhir" required>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<!-- js untuk bootstrap4  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
crossorigin="anonymous"></script>
<!-- js untuk select2  -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function () {
  $("#guru").select2({
    theme: 'bootstrap4',
    placeholder: "Please Select"
  });

  $("#mapel").select2({
    theme: 'bootstrap4',
    placeholder: "Please Select"
  });
});
</script>
</body>

</html>
