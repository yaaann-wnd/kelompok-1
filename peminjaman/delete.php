<?php
include '../config.php';
$id = $_GET['id'];
deletefromtbl('petugas',$id);
header('Location: petugas.php');
?>