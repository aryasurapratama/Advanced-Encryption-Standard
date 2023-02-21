<?php
include '../../../config/connection.php';

$query = $mysqli->query("UPDATE tb_guru SET fname='$_POST[fname]', lname='$_POST[lname]', jenis_kelamin='$_POST[jk]', status='$_POST[status]', email='$_POST[email]', password='$_POST[password]' WHERE id_guru='$_POST[id]'");

if ($query) {
  header("Location:../../master/v_guru.php?alert=1&message=Berhasil mengubah data");
} else {
  header("Location:../../master/v_guru.php?alert=2&message=Gagal mengubah data");
}

 ?>
