<?php
include '../../../config/connection.php';

$query = $mysqli->query("INSERT INTO tb_guru(fname, lname, jenis_kelamin, status, email, password, roles) VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[jk]', '$_POST[status]', '$_POST[email]', '$_POST[password]', '1')");

if ($query) {
  header("Location:../../master/v_guru.php?alert=1&message=Berhasil menambah data");
} else {
  header("Location:../../master/v_guru.php?alert=2&message=Gagal menambah data");
}

 ?>
