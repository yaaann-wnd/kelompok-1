<?php
include 'config.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

$query = mysqli_query($db, "update siswa set nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_kelas='$kelas' where nis='$nis'");

if($query) {
    header ("location:siswa.php");
}

?>