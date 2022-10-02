<?php
include 'config.php';
session_start();

if (!isset($_SESSION['nip'])) {
    header('location:../loginpetugas.php');
}

$id = $_GET['id'];
$delete = mysqli_query($db, "delete from siswa where nis='$id'");

if ($delete) { ?>
    <script>
        alert("Berhasil menghapus!");
        document.location = "siswa.php";
    </script>
<?php
} else {
    echo "Aduh, gagal menghapus";
}

?>