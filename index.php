<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo small.png" />
    <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Web-Portal PDAM Surya Sembada Kota Surabaya</title>
</head>
<body>
    <header class="header d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-3">
                    <img src="assets/images/Logo PDAM-Putih.png" height="56px" alt="">
                    <h1>
                        Selamat Datang
                    </h1>
                    <h2>
                        Di Web Portal PDAM Surya Sembada 
                        <br>
                        Surabaya
                    </h2>
                    <p>
                        Portal untuk akses aplikasi internal PDAM Surya Sembada Surabaya
                    </p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="heading">
            <div class="container">
                <div class="head-kategori">
                    <div class="row justify-content-center text-center">
                        <h3>Kategori Aplikasi</h3>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="pilihan-kategori">
                    <div class="row">
                        <div class="col d-flex justify-content-center align-items-center">
                            <div class="dropdown pe-4">
                                <button class="btn py-2 px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Kategori</span>
                                    <i class="bi bi-chevron-down ms-3"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Semua Aplikasi</a></li>
                                    <li><a class="dropdown-item" href="#">Direktorat Utama</a></li>
                                    <li><a class="dropdown-item" href="#">Direktorat Keuangan</a></li>
                                    <li><a class="dropdown-item" href="#">Direktorat Operasi</a></li>
                                    <li><a class="dropdown-item" href="#">Direktorat Pelayanan</a></li>
                                </ul>
                            </div>
                            <div class="search py-2 px-4">
                                <button id="button" class="pe-2"><i class="bi-search"></i></button>
                                <input type="text" id="input" maxlength="200" width="200" placeholder="Cari aplikasi disini..">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aplikasi">
                    <div class="row">
                        <!-- kolom 1 -->
                        <div class="col-md-3 col-sm-6">
                            <div class="box">
                                <div class="hexagon-shadow">
                                        <div class="hexagon position-absolute top-50 start-50 translate-middle">
                                            <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                        </div>
                                </div>
                                <div class="box-content">
                                    <div class="details">
                                        <h5>E-Procurement</h5>
                                        <p class="mt-3">
                                            Aplikasi Pengadaan Barang dan Jasa asdasd
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>