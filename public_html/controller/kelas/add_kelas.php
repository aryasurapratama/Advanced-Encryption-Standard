<?php
include '../../../config/connection.php';

$query = $mysqli->query("INSERT INTO tb_kelas(id_matkul, id_guru, waktu_mulai, waktu_selesai) VALUES('$_POST[id_matkul]', '$_POST[id_guru]', '$_POST[wkt_mulai]', '$_POST[wkt_akhir]')");

if ($query) {
  header("Location:../../master/v_kelas.php?alert=1&message=Berhasil menambah data");
} else {
  header("Location:../../master/v_kelas.php?alert=2&message=Gagal menambah data");
}

 ?>
