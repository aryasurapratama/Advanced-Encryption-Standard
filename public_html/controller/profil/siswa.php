<?php
include '../../../config/connection.php';

$query = $mysqli->query("UPDATE tb_siswa SET fname='$_POST[fname]', lname='$_POST[lname]', jenis_kelamin='$_POST[jk]', email='$_POST[email]', tanggal_lahir='$_POST[tgl_lahir]', password='$_POST[password]' WHERE id_siswa='$_POST[id]'");

if ($query) {
  header("Location:../../siswa/v_profil.php?alert=1&message=Berhasil mengubah data");
} else {
  header("Location:../../siswa/v_profil.php?alert=2&message=Gagal mengubah data");
}

 ?>
