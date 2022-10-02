<?php
include 'config.php';

$id_buku= $_POST['id_buku'];
$penulis = $_POST['penulis'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$penerbit = $_POST['penerbit'];
$kota = $_POST['kota'];
$sinopsis = $_POST['sinopsis'];
$stok = $_POST['stok'];
$cover = $_FILES['cover']['name'];
$tmp_name = $_FILES['cover']['tmp_name'];
move_uploaded_file($tmp_name, "../bootstrap/img/".$cover);

$query = mysqli_query($db, "update buku set penulis='$penulis', tahun='$tahun', judul='$judul', kota='$kota', penerbit='$penerbit', cover='$cover', sinopsis='$sinopsis', stok='$stok' where id_buku='$id_buku'");

if($query) {
    header ("location:buku.php");
}

?>