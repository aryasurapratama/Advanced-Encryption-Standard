<?php
include '../../../config/connection.php';

$query = $mysqli->query("INSERT INTO tb_detail_kelas(id_kelas, id_siswa) VALUES('$_POST[id_kelas]', '$_POST[id_siswa]')");

$id = $_POST['id_kelas'];

if ($query) {
  header("Location:../../master/v_kelas_siswa.php?id=$id&alert=1&message=Berhasil menambah data");
} else {
  header("Location:../../master/v_kelas_siswa.php?id=$id&alert=2&message=Gagal menambah data");
}

 ?>
