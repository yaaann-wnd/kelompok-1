<?php
include 'config.php';

$id = $_GET['id'];
$qdata = mysqli_query($db, "select cover from buku where id_buku = '$id'");
$data = mysqli_fetch_array($qdata);
$delete = mysqli_query($db, "delete from buku where id_buku='$id'");

unlink("../bootstrap/img/" . $data['cover']);

if ($delete) { ?>
    <script>
        alert("Berhasil menghapus!");
        document.location = "buku.php";
    </script>
<?php
} else {
    echo "Aduh, gagal menghapus";
}

?>