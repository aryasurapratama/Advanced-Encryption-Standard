<?php
session_start();
include '../../config/connection.php';

$verifikasi = $mysqli->query("SELECT * FROM tb_siswa WHERE email='$_POST[email]' AND password='$_POST[pass]'");

if ($verifikasi->num_rows==1) {
  $getData = $verifikasi->fetch_object();
  $_SESSION['id_siswa'] = $getData->id_siswa;
  header("Location:../siswa/v_dashboard.php");
} else {
  header("Location:../siswa/index.php?alert=2");
}

 ?>
