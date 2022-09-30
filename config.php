<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "12";
$db_name = "perpus";

$db = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

function deletefromtbl($tabel,$id){
    global $db;
    $delete = mysqli_query($db,"DELETE FROM `$tabel` WHERE `$tabel`.`nip` = $id");
}

function updatepetugas($nama,$gender,$address,$password,$id){
    global $db;
    $update = mysqli_query($db, "UPDATE `petugas` SET `nama` = '$nama',`jenis_kelamin` = '$gender',`password` = '$password',`alamat` = '$address' WHERE `petugas`.`nip` = $id;");

    header('Location: petugas/petugas.php');
}

function addpetugas($nama,$gender,$address,$password){
    global $db;
    $update = mysqli_query($db, "INSERT INTO `petugas` (`nip`, `nama`, `jenis_kelamin`, `alamat`, `password`) VALUES (NULL, '$nama', '$gender', '$address', '$password');");

    header('Location: petugas/petugas.php');
}
if($db) {
    // echo 'Koneksi Berhasil!';
} else {
    echo 'Koneksi Gagal!';
}