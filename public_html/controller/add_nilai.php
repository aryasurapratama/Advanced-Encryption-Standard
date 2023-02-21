<?php
include '../../config/connection.php';

$query = $mysqli->query("INSERT INTO tb_nilai(id_siswa, id_matkul, nilai_siswa, keterangan, status, key_size, pass_key) VALUES('$_POST[id_siswa]', '$_POST[id_matkul]', '$_POST[nilai]', '$_POST[keterangan]', '0', '0', '0')");

if ($query) {
  header("Location:../guru/v_nilai.php?alert=1&id_kelas=$_POST[id_kelas]");
} else {
  header("Location:../guru/v_nilai.php?alert=2&id_kelas=$_POST[id_kelas]");
}

 ?>
