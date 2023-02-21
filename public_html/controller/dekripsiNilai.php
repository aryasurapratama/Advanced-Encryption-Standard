<?php
session_start();
require '../../library/aes.class.php';     // AES PHP implementation
require '../../library/aesctr.class.php';  // AES Counter Mode implementation
include '../../config/connection.php';

$query = $mysqli->query("SELECT * FROM tb_nilai WHERE id_siswa='$_SESSION[id_siswa]'");

while ($value = $query->fetch_object()) {
  if ($value->key_size==$_POST['key_size'] && $value->pass_key==$_POST['password']) {
    $nilai_siswa = AesCtr::decrypt($value->nilai_siswa, $_POST['password'], $_POST['key_size']);
    $keterangan = AesCtr::decrypt($value->keterangan, $_POST['password'], $_POST['key_size']);
    $mysqli->query("UPDATE tb_nilai SET nilai_siswa='$nilai_siswa', keterangan='$keterangan', status='0' WHERE id_siswa='$_SESSION[id_siswa]'");
    $redirecto = 'Location:../siswa/v_nilai.php?alert=1&myalert=Berhasil Melakukan Dekripsi!';
  } else {
    $redirecto = 'Location:../siswa/v_nilai.php?alert=2&myalert=Gagal Melakukan Dekripsi!';
  }
}

header($redirecto);
?>
