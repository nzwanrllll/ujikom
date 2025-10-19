<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <title>SMKN 4 Tasikmalaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: Calibri, Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* HERO */
        .hero {
            position: relative;
            width: 100%;
            height: 85vh;
            background: url('galeri/depan.jpg') no-repeat center center/cover;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3));
            backdrop-filter: blur(1px);
        }

        .hero-text {
            position: relative;
            color: white;
            max-width: 600px;
            z-index: 1;
            text-align: left;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-text h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 300;
        }

        /* SAMBUTAN */
        .sambutan {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .sambutan img {
            border: 4px solid #007bff;
        }

        /* STATISTIK (tetep seperti versi kamu) */
        .stat-card {
            border: none;
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.3);
        }

        .stat-card h2 {
            color: #007bff;
            font-weight: bold;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .stat-card p {
            margin: 0;
            font-size: 1.1rem;
            color: #555;
            font-weight: 500;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: rgba(0, 123, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #007bff;
        }

        /*JURUSAN*/
         .program-card {
        background: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #e9ecef;
        }

        .program-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.2);
        }

        .program-card img {
            width: 120px;
            height: 120px;
            object-fit: contain;
            margin: 0 auto;
            display: block;
        }

        .program-card h6 {
            font-size: 0.9rem;
            color: #212529;
        }

        @media (max-width: 992px) {
            .program-card img {
                width: 100px;
                height: 100px;
            }
        }

        @media (max-width: 576px) {
            .program-card h6 {
                font-size: 0.85rem;
            }
        }

        /* GALERI */
         .galeri-card {
        cursor: pointer;
            transition: transform 0.4s ease, box-shadow 0.3s ease;
        }

        .galeri-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.25);
        }

        .galeri-card img {
            transition: opacity 0.4s ease;
        }

        .galeri-card .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 123, 255, 0.45);
            opacity: 0;
            transition: opacity 0.4s ease;
            color: white;
            font-size: 2rem;
        }

        .galeri-card:hover .overlay {
            opacity: 1;
        }

        .galeri-card:hover img {
            opacity: 0.85;
        }

        /* BERITA */
        .berita-card img {
        height: 240px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        }

        .berita-card .card-body {
        padding: 20px;
        }

        .berita-card h5 {
        transition: color 0.3s ease;
        }

        .berita-card:hover h5 {
        color: #0056b3;
        }

        .berita-card p {
        font-size: 0.95rem;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- HERO SECTION -->
    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="hero-text">
                <h1>SMK Negeri 4 Tasikmalaya</h1>
                <h2>Sekolah Pusat Keunggulan</h2>
            </div>
        </div> 
    </section>

    <br><br>

    <!-- SECTION SAMBUTAN -->
    <section>
        <div class="container">
            <h2 class="text-primary"><b>Sambutan</b></h2>
            <h3><b>Kepala Sekolah</b></h3>
            <div class="row align-items-center sambutan">
                <div class="col-lg-4 text-center">
                    <img src="galeri/kepsek.jpeg" height="250px" class="img-fluid rounded shadow" alt="">
                </div>
                <div class="col-lg-8 mt-3 mt-lg-0">
                    <h5><b>Kurniawan S.Pd, M.Pd</b></h5>
                    <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
                    <p>
                        Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya.
                        Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini.
                        Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang sekolah kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.
                    </p>
                    <p>
                        Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan satu segala bantuan dan
                        persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.
                    </p>
                    <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                </div>
            </div>
        </div>
    </section>

    <br>

    <!-- SECTION STATISTIK -->
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-6 mb-4">
                    <div class="card stat-card">
                        <div class="card-body">
                            <div class="icon-box">
                                <i class="bi bi-people"></i>
                            </div>
                            <h2>1500</h2>
                            <p>Peserta Didik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="card stat-card">
                        <div class="card-body">
                            <div class="icon-box">
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <h2>100</h2>
                            <p>Pendidik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="card stat-card">
                        <div class="card-body">
                            <div class="icon-box">
                                <i class="bi bi-building"></i>
                            </div>
                            <h2>45</h2>
                            <p>Rombel</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="card stat-card">
                        <div class="card-body">
                            <div class="icon-box">
                                <i class="bi bi-gear"></i>
                            </div>
                            <h2>5</h2>
                            <p>Program Keahlian</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <!-- SECTION PROGRAM KEAHLIAN -->
    <section style="background-color: #ffffff;">
        <div class="container py-5">
            <h2 class="text-center mb-5 text-primary fw-bold">Program Keahlian</h2>
            <div class="row justify-content-center gy-4 gx-4">

                <div class="col-md-2 col-sm-4 col-6">
                    <div class="program-card text-center p-3 rounded shadow-sm">
                        <img src="galeri/pplg.png" alt="PPLG">
                        <h6 class="mt-3 fw-semibold">Pengembangan Perangkat Lunak dan Gim (PPLG)</h6>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="program-card text-center p-3 rounded shadow-sm">
                        <img src="galeri/tsm.png" alt="TBSM">
                        <h6 class="mt-3 fw-semibold">Teknik dan Bisnis Sepeda Motor (TBSM)</h6>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4 col-6">
                    <div class="program-card text-center p-3 rounded shadow-sm">
                        <img src="galeri/dkv.png" alt="DKV">
                        <h6 class="mt-3 fw-semibold">Desain Komunikasi Visual (DKV)</h6>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4 col-6">
                    <div class="program-card text-center p-3 rounded shadow-sm">
                        <img src="galeri/toi.png" alt="TOI">
                        <h6 class="mt-3 fw-semibold">Teknik Otomasi Industri (TOI)</h6>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4 col-6">
                    <div class="program-card text-center p-3 rounded shadow-sm">
                        <img src="galeri/tjkt.png" alt="TJKT">
                        <h6 class="mt-3 fw-semibold">Teknik Jaringan Komputer dan Telekomunikasi (TJKT)</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- SECTION GALERI -->
    <section style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-primary fw-bold">Galeri</h2>
                <div style="width: 80px; height: 4px; background-color: #007bff; margin: 10px auto; border-radius: 10px;"></div>
                <p class="text-muted">Potret kegiatan di SMKN 4 Tasikmalaya</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="galeri-card position-relative overflow-hidden rounded shadow-sm">
                        <img src="galeri/g1.JPG" alt="Galeri 1" class="w-100 rounded">
                        <div class="overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="galeri-card position-relative overflow-hidden rounded shadow-sm">
                        <img src="galeri/g2.JPG" alt="Galeri 2" class="w-100 rounded">
                        <div class="overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="galeri-card position-relative overflow-hidden rounded shadow-sm">
                        <img src="galeri/g3.JPG" alt="Galeri 3" class="w-100 rounded">
                        <div class="overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="galeri-card position-relative overflow-hidden rounded shadow-sm">
                        <img src="galeri/g4.JPG" alt="Galeri 4" class="w-100 rounded">
                        <div class="overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center my-5">
                <a class="btn btn-primary px-4 py-2" href="galeri.php">
                    <i class="bi bi-images me-2"></i> Lihat Semua Galeri
                </a>
            </div>
        </div>
    </section>

   <!-- SECTION BERITA -->
    <section style="background-color: #ffffff;">
    <div class="container py-5">
        <div class="text-center mb-5">
        <h2 class="text-primary fw-bold">Berita</h2>
        <div style="width: 80px; height: 4px; background-color: #007bff; margin: 10px auto; border-radius: 10px;"></div>
        <p class="text-muted">Informasi dan kegiatan terbaru dari SMKN 4 Tasikmalaya</p>
        </div>

        <div class="row g-4">
        <!-- BERITA 1 -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100 berita-card">
            <img src="galeri/berita1.JPG" class="card-img-top" alt="Berita 1">
            <div class="card-body">
                <h5 class="fw-bold text-primary mb-2">JOB FAIR</h5>
                <p class="text-muted">SMKN 4 Tasikmalaya menggelar Job Fair 2024 yang menghadirkan puluhan perusahaan dengan ratusan lowongan kerja untuk para pencari kerja.</p>
                <a href="https://radarpangandaran.com/gaya-hidup/smkn-4-tasikmalaya-gelar-job-fair-2024-dibutuhkan-200-pencari-kerja-ini-cara-daftarnya/" class="btn btn-outline-primary btn-sm">
                Baca Selengkapnya <i class="bi bi-arrow-right-short"></i>
                </a>
            </div>
            </div>
        </div>

        <!-- BERITA 2 -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100 berita-card">
            <img src="galeri/berita2.JPG" class="card-img-top" alt="Berita 2">
            <div class="card-body">
                <h5 class="fw-bold text-primary mb-2">MBG</h5>
                <p class="text-muted"> SMKN 4 Tasikmalaya melaksanakan program nasional <b>Makan Bergizi Gratis (MBG)</b> untuk mendukung kesehatan dan semangat belajar siswa.</p>
                <a href="https://www.antaranews.com/tag/mbg-di-sekolah" class="btn btn-outline-primary btn-sm">
                Baca Selengkapnya <i class="bi bi-arrow-right-short"></i>
                </a>
            </div>
            </div>
        </div>
        </div>

        <!-- TOMBOL LIHAT BERITA LAINNYA -->
        <div class="text-center mt-5">
        <a class="btn btn-primary px-4 py-2" href="berita.php">
            <i class="bi bi-newspaper me-2"></i> Berita Lainnya
        </a>
        </div>
    </div>
    </section>


    <?php include 'footer.php'; ?>

</body>

</html>
