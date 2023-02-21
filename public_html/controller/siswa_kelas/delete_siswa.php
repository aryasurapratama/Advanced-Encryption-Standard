<?php
include '../../../config/connection.php';

$query = $mysqli->query("DELETE FROM tb_detail_kelas WHERE id_siswa='$_GET[id]'");

$id = $_GET['id_kelas'];

if ($query) {
  header("Location:../../master/v_kelas_siswa.php?id=$id&alert=1&message=Berhasil menghapus data");
} else {
  header("Location:../../master/v_kelas_siswa.php?id=$id&alert=2&message=Gagal menghapus data, karna berelasi dengan data lain!");
}

 ?>
