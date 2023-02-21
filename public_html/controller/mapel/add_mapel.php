<?php
include '../../../config/connection.php';

$query = $mysqli->query("INSERT INTO tb_matkul(kode_matkul, nama_matkul) VALUES('$_POST[kode]', '$_POST[nama]')");

if ($query) {
  header("Location:../../master/v_mapel.php?alert=1&message=Berhasil menambah data");
} else {
  header("Location:../../master/v_mapel.php?alert=2&message=Gagal menambah data");
}

 ?>
