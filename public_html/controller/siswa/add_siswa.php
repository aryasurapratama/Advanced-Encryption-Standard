<?php
include '../../../config/connection.php';

$query = $mysqli->query("INSERT INTO tb_siswa(fname, lname, jenis_kelamin, tanggal_lahir, email, password) VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[jk]', '$_POST[tgl_lahir]', '$_POST[email]', '$_POST[password]')");

if ($query) {
  header("Location:../../master/v_siswa.php?alert=1&message=Berhasil menambah data");
} else {
  header("Location:../../master/v_siswa.php?alert=2&message=Gagal menambah data");
}

 ?>
