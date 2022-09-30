<?php
include '../config.php';
$id = $_GET['id'];
$delete = mysqli_query($db,"DELETE FROM `kelas` WHERE `$tabel`.`id_kelas` = $id");
header('Location: index.php');
?>