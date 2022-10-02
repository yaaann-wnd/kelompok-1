<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:../index.php');
}

$id = $_GET['id'];
$delete = mysqli_query($db, "delete from kelas where id_kelas='$id'");

if ($delete) { ?>
    <script>
        alert("Berhasil menghapus!");
        document.location = "kelas.php";
    </script>
<?php
} else {
    echo "Aduh, gagal menghapus";
}

?>