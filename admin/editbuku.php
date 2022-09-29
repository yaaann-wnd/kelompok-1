<?php

include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <!-- <style>
        .col-6 .mb-3 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style> -->
</head>

<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="judul text-center my-4">
                <h3>Edit Buku</h3>
            </div>
            <form action="editbukuproses.php" method="post" enctype="multipart/form-data">
                <?php
                $id = $_GET['id'];
                $ambil = mysqli_query($db, "select * from buku where id_buku='$id'");
                while ($data = mysqli_fetch_array($ambil)) {

                ?>
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="input-1 w-50 ms-auto">
                                <div class="mb-3">
                                    <label class="form-label" for="idm">ID Buku</label>
                                    <input type="text" id="idm" class="form-control" readonly name="id_buku" value="<?php echo $data['id_buku']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Penulis</label>
                                    <input type="text" class="form-control" name="penulis" value="<?php echo $data['penulis']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tahun</label>
                                    <input type="number" class="form-control" min="1900" max="2099" name="tahun" value="<?php echo $data['tahun']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" value="<?php echo $data['penerbit']; ?>">
                                </div>
                                <div>
                                    <label class="form-label">Kota</label>
                                    <input type="text" class="form-control" name="kota" value="<?php echo $data['kota']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-2 w-50">
                                <div class="mb-3">
                                    <label class="form-label">Sinopsis</label>
                                    <textarea name="sinopsis" class="form-control" rows="3"><?php echo $data['sinopsis']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="number" class="form-control" name="stok" value="<?php echo $data['stok']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cover</label>
                                    <input type="file" class="form-control" name="cover">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Cover sebelumnya : </label>
                                    <img src="../bootstrap/img/<?= $data['cover'] ?>" class="rounded" width="70px" alt="">
                                    <?php
                                    if ($data['cover'] == "") { ?>
                                        <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" width="70px" class="rounded">
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Gasss</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Gasss</button>
                    </div>
                <?php
                }
                ?>
            </form>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>