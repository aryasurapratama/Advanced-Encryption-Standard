<?php
session_start();
include "../../config/connection.php";
if (isset($_SESSION['id_siswa'])) {
  $profil = $mysqli->query("SELECT * FROM tb_siswa WHERE id_siswa='$_SESSION[id_siswa]'");
  $myprofil = $profil->fetch_object();
}  else {
  header('Location:index.php');
}
?>
