<?php
include '../../../config/connection.php';

$query = $mysqli->query("UPDATE tb_kelas SET id_matkul='$_POST[id_matkul]', id_guru='$_POST[id_guru]', waktu_mulai='$_POST[wkt_mulai]', waktu_selesai='$_POST[wkt_akhir]' WHERE id_kelas='$_POST[id]'");

if ($query) {
  header("Location:../../master/v_kelas.php?alert=1&message=Berhasil mengubah data");
} else {
  header("Location:../../master/v_kelas.php?alert=2&message=Gagal mengubah data");
}

 ?>
