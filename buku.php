<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#">Peminjaman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <div class="ms-4">
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="buku-outer container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Data Buku</h4>
            </div>
            <div class="card-body">
                <div class="tabel">
                    <table class="table table-sm text-center">
                        <thead class="bg-success text-white bg-opacity-75 text-center">
                            <tr>
                                <th scope="col">ID Buku</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Sinopsis</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $ambil = mysqli_query($db, "select * from buku");
                                while ($data = mysqli_fetch_array($ambil)) { ?>
                            <tr>
                                <td><?= $data['id_buku'] ?></td>
                                <td><?= $data['penulis'] ?></td>
                                <td><?= $data['tahun'] ?></td>
                                <td><?= $data['judul'] ?></td>
                                <td><?= $data['penerbit'] ?></td>
                                <td><img src="bootstrap/img/<?= $data['cover'] ?>" class="rounded" width="75px" alt=""></td>
                                <td><?= $data['sinopsis'] ?></td>
                                <td><?= $data['stok'] ?></td>
                                <td class="text-center">
                                    <a href="edit.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="deletebuku.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>