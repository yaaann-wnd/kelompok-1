<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "perpus";

$db = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

if($db) {
    // echo 'Koneksi Berhasil!';
} else {
    echo 'Koneksi Gagal!';
}