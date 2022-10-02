
<?php
include 'petugas/config.php';
session_start();

if (isset($_SESSION['nip'])) {
    header('location:petugas/buku.php');
}

if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $password = $_POST['password'];

    $query = mysqli_query($db, "SELECT * FROM petugas WHERE nip='$nip' AND password='$password'");
    $data = mysqli_fetch_array($query);

    if ($data) {
        $_SESSION['nip'] = $data['nip'];
        $_SESSION['nama'] = $data['nama'];
        header('location:petugas/buku.php');
    } else { ?>
        <script>
            alert("NIP atau Password anda SALAH")
        </script>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Login Admin
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="">    
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Login Petugas</h3>
                                    <p class="mb-0">Masukkan NIP dan Password</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST">
                                        <label>NIP</label>
                                        <div class="mb-3">
                                            <input type="number" min="1" class="form-control" name="nip" placeholder="NIP" aria-label="Email">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" aria-label="Password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" onclick="lihat()">
                                            <label class="form-check-label" for="rememberMe">Lihat password</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Login sebagai admin?
                                        <a href="index.php" class="text-warning text-gradient font-weight-bold">Klik disini</a>
                                    </p>
                                    <p class="mb-4 text-sm mx-auto">
                                        Masuk sebagai siswa?
                                        <a href="loginsiswa.php" class="text-warning text-gradient font-weight-bold">Klik disini</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/curved-images/curved6.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->    
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script>
        function lihat() {
            let x = document.getElementById("password");

            if (x.type == "password") {
                x.type = "text";                
            } else {
                x.type = "password";
            }
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>