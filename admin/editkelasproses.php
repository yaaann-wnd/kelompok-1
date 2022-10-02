<?php
include 'config.php';

$id = $_POST['id_kelas'];
$nama = $_POST['nama'];

$query = mysqli_query($db, "UPDATE kelas SET nama_kelas='$nama' WHERE id_kelas='$id'");

if ($query) {
    header('location:kelas.php');
} else{
    echo "Edit kelas gagal";
}

?>