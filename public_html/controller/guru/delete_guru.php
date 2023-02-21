<?php
include '../../../config/connection.php';

$query = $mysqli->query("DELETE FROM tb_guru WHERE id_guru='$_GET[id]'");

if ($query) {
  header("Location:../../master/v_guru.php?alert=1&message=Berhasil menghapus data");
} else {
  header("Location:../../master/v_guru.php?alert=2&message=Gagal menghapus data, karna berelasi dengan data lain!");
}

 ?>
