<?php
session_start();
include '../../config/connection.php';

$verifikasi = $mysqli->query("SELECT * FROM tb_guru WHERE email='$_POST[email]' AND password='$_POST[pass]' AND roles='0'");

if ($verifikasi->num_rows==1) {
  $getData = $verifikasi->fetch_object();
  $_SESSION['id_guru'] = $getData->id_guru;
  header("Location:../master/v_dashboard.php");
} else {
  header("Location:../master/index.php?alert=2");
}

 ?>
