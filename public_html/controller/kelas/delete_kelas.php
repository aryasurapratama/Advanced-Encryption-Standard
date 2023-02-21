<?php
include '../../../config/connection.php';

$query = $mysqli->query("DELETE FROM tb_kelas WHERE id_kelas='$_GET[id]'");

if ($query) {
  header("Location:../../master/v_kelas.php?alert=1&message=Berhasil menghapus data");
} else {
  header("Location:../../master/v_kelas.php?alert=2&message=Gagal menghapus data, karna berelasi dengan data lain!");
}

 ?>
