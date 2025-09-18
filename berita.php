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

        section {
            padding: 60px 0;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php include 'navbar.php'; ?>
    <br>

    <!-- SECTION BERITA -->
    <section>
        <div class="container">
            <h2 class="text-center mb-4"><b>Berita <span style="color:#007bff;">SMKN 4 Tasikmalaya</span></b></h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="berita-card card">
                        <img src="galeri/berita1.JPG" alt="" class="w-100">
                        <div class="card-body">
                            <h3>JOB FAIR</h3>
                            <a class="btn btn-primary" href="https://radarpangandaran.com/gaya-hidup/smkn-4-tasikmalaya-gelar-job-fair-2024-dibutuhkan-200-pencari-kerja-ini-cara-daftarnya/">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="berita-card card">
                        <img src="galeri/berita2.JPG" alt="" class="w-100">
                        <div class="card-body">
                            <h3>MBG</h3>
                            <a class="btn btn-primary" href="https://www.antaranews.com/tag/mbg-di-sekolah">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="berita-card card">
                        <img src="galeri/berita3.JPG" alt="" class="w-100">
                        <div class="card-body">
                            <h3>Expo Creanova</h3>
                            <a class="btn btn-primary" href="https://radartasik.id/2023/03/02/siswa-smkn-4-tasikmalaya-adu-inovasi-dan-kreativitas-di-expo-creanova/">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="berita-card card">
                        <img src="galeri/berita4.JPG" alt="" class="w-100">
                        <div class="card-body">
                            <h3>Sinergi Bagi Negeri</h3>
                            <a class="btn btn-primary" href="https://jabar.tribunnews.com/2023/03/02/sinergi-bagi-negeri-dam-kerjasama-dengan-smkn-4-tasikmalaya-terapkan-ktbsm-sepeda-motor-astra-honda">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP SECTION BERITA -->

    <?php include 'footer.php'; ?>

</body>

</html>
