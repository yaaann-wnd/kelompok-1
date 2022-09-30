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

if($db) {
    // echo 'Koneksi Berhasil!';
} else {
    echo 'Koneksi Gagal!';
}