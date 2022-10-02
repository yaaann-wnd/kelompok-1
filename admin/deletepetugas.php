<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:../index.php');
}

$id = $_GET['id'];
$delete = mysqli_query($db, "DELETE FROM petugas WHERE nip='$id'");

if ($delete) { ?>
    <script>
        alert("Berhasil menghapus!");
        document.location = "petugas.php";
    </script>
<?php 
} else {
    echo "Aduh, gagal menghapus";
}

?>