<?php
include 'views/setting.php';
?>
<?php
$verifikasi = $mysqli->query("SELECT * FROM tb_nilai WHERE id_siswa='$_GET[id_siswa]' AND id_matkul='$_GET[id_matkul]'");

if ($verifikasi->num_rows!=0) {
  header("Location:v_nilai.php?id_kelas=".$_GET['id_kelas'].'&alert=2');
}
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
  <title>List Siswa</title>

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
          <h3 class="box-title">Tambah Nilai Siswa</h3>
          <div class="row col-lg-12">
            <?php
            #get data siswa
            $query_siswa = $mysqli->query("SELECT fname, lname FROM tb_siswa WHERE id_siswa='$_GET[id_siswa]'");
            $siswa = $query_siswa->fetch_object();

            #get data mapel
            $query_mapel = $mysqli->query("SELECT nama_matkul FROM tb_matkul WHERE id_matkul='$_GET[id_matkul]'");
            $mapel = $query_mapel->fetch_object();
            ?>
            <form action="../controller/add_nilai.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Nama Siswa</label>
                  <input type="text" class="form-control" id="inputEmail4" readonly placeholder="<?= $siswa->fname; ?> <?= $siswa->lname; ?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4">Nama Matkul</label>
                  <input type="text" class="form-control" id="inputPassword4" readonly placeholder="<?= $mapel->nama_matkul; ?>">
                </div>
              </div>
              <input type="hidden" name="id_siswa" value="<?= $_GET['id_siswa']; ?>">
              <input type="hidden" name="id_matkul" value="<?= $_GET['id_matkul']; ?>">
              <input type="hidden" name="id_kelas" value="<?= $_GET['id_kelas']; ?>">
              <div class="form-group">
                <label for="inputAddress">Nilai</label>
                <input type="number" name="nilai" class="form-control" id="inputAddress" placeholder="Nilai Siswa" required>
              </div>
              <div class="form-group">
                <label for="inputAddress2">Keterangan</label>
                <select class="form-control" name="keterangan">
                  <option value="LULUS">LULUS</option>
                  <option value="TIDAK LULUS">TIDAK LULUS</option>
                  <option value="KURANG">KURANG</option>
                  <option value="STANDART">STANDART</option>
                </select>
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
