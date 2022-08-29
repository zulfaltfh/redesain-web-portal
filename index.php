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
                                    <li><a class="dropdown-item" href="index.php">Semua Aplikasi</a></li>
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
                        <!-- e-procurement 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>E-Procurement</h5>
                                        <p>Aplikasi pengadaan barang dan jasa</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- kompetensi -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Kompetensi</h5>
                                        <p>Aplikasi pelatihan kompetensi internal</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- bengkel meter -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Bengkel Meter</h5>
                                        <p>Aplikasi catat meter dan tera meter</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- workflow doc -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Workflow Document</h5>
                                        <p>Aplikasi surat menyurat internal</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- tata naskah tu -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Tata Naskah TU</h5>
                                        <p>Tata naskah administrasi perusahaan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- arsip hukum -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_arsip_hukum.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Arsip Hukum</h5>
                                        <p>Arsip dokumen hukum perusahaan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- tsi -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>TSI</h5>
                                        <p>Aplikasi pengaduan layanan TI</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- monitoring pengaduan -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_monitoring_pengaduan.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Monitoring Pengaduan</h5>
                                        <p>Aplikasi pemantauan pelayanan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- data pelanggan -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Data Pelanggan</h5>
                                        <p>Sistem informasi data pelanggan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- analisa pemakaian air -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_Pemakaian_Air.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Analisa Pemakaian Air</h5>
                                        <p>Aplikasi pemakaian air pelanggan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pengolahan Air -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_E-Procurement.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Pengolahan & Rumah Pompa</h5>
                                        <p>Pengolahan IPAM dan rumah pompa</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Penertiban -->
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <div class="icon-aplikasi position-absolute start-50 translate-middle">
                                    <div class="icon">
                                        <img src="assets/icon/icon_Penertiban.svg" alt="">
                                    </div>
                                </div>
                                <div class="box-content overflow-hidden">
                                    <div class="details text-center">
                                        <h5>Aplikasi Penertiban</h5>
                                        <p>Aplikasi Penertiban Tutup Dinas</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="copyright py-4">
              &copy;2022 Copyright PDAM Surya Sembada Surabaya. All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>