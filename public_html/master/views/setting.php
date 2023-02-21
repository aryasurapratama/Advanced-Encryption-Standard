<?php
session_start();
include "../../config/connection.php";
if (isset($_SESSION['id_guru'])) {
  $profil = $mysqli->query("SELECT * FROM tb_guru WHERE id_guru='$_SESSION[id_guru]'");
  $myprofil = $profil->fetch_object();
} else {
  header('Location:index.php');
}
?>
