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

        /* GALERI */
        .galeri-card img {
            border-radius: 10px;
            transition: transform 0.4s ease, box-shadow 0.3s;
        }

        .galeri-card img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.2);
        }

        /* BERITA */
        .berita-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .berita-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(0, 123, 255, 0.25);
        }

        .berita-card img {
            height: 250px;
            object-fit: cover;
        }

        .berita-card h3 {
            font-size: 1.5rem;
            font-weight: bold; 
            color: #007bff;
        }

        /* SPACING ANTAR SECTION */
        section {
            padding: 60px 0;
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

    <!-- SECTION STATISTIK (tetap) -->
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

    
    
    <!-- SECTION GALERI -->
    <section>
        <div class="container">
            <h2 class="text-center mb-4"><b>Galeri</b></h2>
            <div class="row">
                <div class="col-lg-3 col-6 mb-4">
                    <div class="galeri-card">
                        <img src="galeri/g1.JPG" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="galeri-card">
                        <img src="galeri/g2.JPG" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="galeri-card">
                        <img src="galeri/g3.JPG" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <div class="galeri-card">
                        <img src="galeri/g4.JPG" alt="" class="w-100 h-100">
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <a class="btn btn-primary" href="galeri.php">Intip Lainnya</a>
            </div>
        </div>
    </section>


    <!-- SECTION BERITA -->
    <section>
        <div class="container">
            <h2 class="text-center mb-4"><b>Berita</b></h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="berita-card card">
                        <img src="galeri/berita1.JPG" alt="" class="w-100">
                        <div class="card-body">
                            <h3>JOB FAIR</h3>
                            <a class="btn btn-primary" href="https://radarpangandaran.com/gaya-hidup/smkn-4-tasikmalaya-gelar-job-fair-2024-dibutuhkan-200-pencari-kerja-ini-cara-daftarnya/">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="berita-card card">
                        <img src="galeri/berita2.JPG" alt="" class="w-100">
                        <div class="card-body">
                            <h3>MBG</h3>
                            <a class="btn btn-primary" href="https://www.antaranews.com/tag/mbg-di-sekolah">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div> 
                <!-- Tombol di tengah bawah -->
            <div class="text-center my-4">
                <a class="btn btn-primary" href="berita.php">Berita Lainnya</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>

</html>
