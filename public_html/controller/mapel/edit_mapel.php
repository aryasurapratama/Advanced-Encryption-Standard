<?php
include '../../../config/connection.php';

$query = $mysqli->query("UPDATE tb_matkul SET kode_matkul='$_POST[kode]', nama_matkul='$_POST[nama]' WHERE id_matkul='$_POST[id]'");

if ($query) {
  header("Location:../../master/v_mapel.php?alert=1&message=Berhasil mengubah data");
} else {
  header("Location:../../master/v_mapel.php?alert=2&message=Gagal mengubah data");
}

 ?>
