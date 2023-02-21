<?php
include '../../../config/connection.php';

$query = $mysqli->query("DELETE FROM tb_matkul WHERE id_matkul='$_GET[id]'");

if ($query) {
  header("Location:../../master/v_mapel.php?alert=1&message=Berhasil menghapus data");
} else {
  header("Location:../../master/v_mapel.php?alert=2&message=Gagal menghapus data, karna berelasi dengan data lain!");
}

 ?>
