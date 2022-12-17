<?php
session_start();
ob_start();
include 'koneksi.php';
$temp = $_SESSION['email'];
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    echo "<p align='center'>Anda Harus Login Terlebih dahulu!</p>";
    echo "<meta http-equiv='refresh' content='2;url=index.php'>";
} else {
    define('INDEX', true);
}

$data = mysqli_query($connection, "SELECT email FROM user WHERE email = '$temp'");
$d = mysqli_fetch_array($data);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARVELNews</title>
    <link rel="icon" href="asset/M.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/webstyle.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!--  -->
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/46b4349e30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- End -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color:white ;">
        <div class="container">
            <a class="navbar-brand" href="index_logout.php">MARVELNews</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="index_logout.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index_logout.php#news">Latest News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index_logout.php#movies">Movies And Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index_logout.php#comics">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index_logout.php#videos">Videos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Member
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="join_member.php">Join Member</a></li>
                            <li><a class="dropdown-item" href="data_member.php">Data Member</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                            <?php echo $_SESSION['username']; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="edit_akun.php ?email=<?php echo $d['email']; ?>"><i
                                        class="fa-solid fa-wrench"></i> Edit Akun</a></li>
                            <li><a class="dropdown-item" href="hapus_akun.php ?username=<?php echo $d['email']; ?>">
                                    <i class="bi bi-tools"></i> Hapus Akun</a></li>
                            <li><a class="dropdown-item" href="aksi_logout.php"><i
                                        class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End -->

    <!-- Data Member -->
    <section id="mahasiswa">
        <div class="container mt-5">
            <div class="row text-center mb-2">
                <div class="col mt-3">
                    <div class="section-headline text-center">
                        <h2>Daftar Member</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly fs-5 text-center align-items-center">
                <div class="col-md-12">

                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <!-- Menapilkan Data Mahasiswa -->

                        <?php
              include_once 'koneksi.php';
                $no=1;
                $data=mysqli_query($connection, "SELECT * FROM member");
                while ($d=mysqli_fetch_array($data)){
            ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['email']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['ttl']; ?></td>
                            <td><?php echo $d['jk']; ?></td>
                        </tr>

                        <?php
            }
            ?>

                        <!-- Menampilkan Data Mahasiswa -->
                    </table>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row justify-content-evenly  align-items-center">
                    <div class="col-md-7">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-6">
                                <div class="edit-data">

                                    <a href="index_logout.php"><button class="back">Back To Homepage</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>
    <!-- End -->

    <!-- footer -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="icon"></i>
                    <div>
                        <h3>MARVELNews</h3>
                        <p>
                            Get More Information and News
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MarvelNews</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Rizki & Pieter</a>
            </div>
        </div>

    </footer>
    <!-- End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>