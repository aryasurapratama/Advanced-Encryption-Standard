<?php
include '../../../config/connection.php';

$query = $mysqli->query("UPDATE tb_guru SET fname='$_POST[fname]', lname='$_POST[lname]', jenis_kelamin='$_POST[jk]', email='$_POST[email]', password='$_POST[password]' WHERE id_guru='$_POST[id]'");

if ($query) {
  header("Location:../../guru/v_profil.php?alert=1&message=Berhasil mengubah data");
} else {
  header("Location:../../guru/v_profil.php?alert=2&message=Gagal mengubah data");
}

 ?>
