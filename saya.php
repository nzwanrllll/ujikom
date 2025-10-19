<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - SMKN 4 Tasikmalaya</title>
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: Calibri, Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
        }

        section {
            padding: 60px 0;
        }

        h2.section-title {
            font-weight: bold;
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }

        /* Card utama */
        .info-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 28px rgba(0, 123, 255, 0.25);
        }

        .info-card img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .info-text {
            padding: 25px;
        }

        .info-text h3 {
            color: #007bff;
            font-weight: bold;
        }

        .info-text p {
            font-size: 1rem;
            color: #555;
        }

        /* List biodata */
        .biodata-list li {
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .biodata-list i {
            color: #007bff;
            margin-right: 8px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .info-text {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- SECTION 1: BIODATA PRIBADI -->
    <section>
        <div class="container">
            <h2 class="section-title">Biodata Pribadi</h2>
            <div class="row align-items-center info-card p-3">
                <div class="col-md-4">
                    <img src="galeri/nazwa2.png" alt="Foto Nazwa" class="img-fluid rounded">
                </div>
                <div class="col-md-8 info-text">
                    <h3>Nazwa Nurul Azmi</h3>
                    <ul class="list-unstyled biodata-list mt-3">
                        <li><i class="bi bi-person-circle"></i>Jenis Kelamin: Perempuan</li>
                        <li><i class="bi bi-geo-alt"></i>Alamat: Kp Babakan Nanggerang</li>
                        <li><i class="bi bi-telephone"></i>Kontak: 0821-1946-8394</li>
                        <li><i class="bi bi-envelope"></i>Email: nazwanurulazmi1006@gmail.com</li>
                        <li><i class="bi bi-heart"></i>Hobi: Menyanyi, Menulis, Editing dan Membaca Buku</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: PROFIL PEMBUAT WEBSITE -->
    <section>
        <div class="container">
            <h2 class="section-title">Profil Pembuat Website</h2>
            <div class="row align-items-center info-card p-3 flex-md-row-reverse">
                <div class="col-md-4">
                    <img src="galeri/kode.jpg" alt="Ilustrasi Web" class="img-fluid rounded">
                </div>
                <div class="col-md-8 info-text">
                    <h3>Website Profil Sekolah SMKN 4 Tasikmalaya</h3>
                    <p>
                        Website ini dibuat sebagai bagian dari ujian praktik kejuruan pada program keahlian
                        <b>Pengembangan Perangkat Lunak dan Gim (PPLG)</b>.
                        Tujuan utama dari pembuatan website ini adalah untuk menampilkan profil sekolah secara informatif,
                        menarik, dan mudah diakses oleh masyarakat.
                    </p>
                    <p>
                        Sebagai pembuat website, saya berperan dalam perancangan tampilan, pengaturan struktur halaman,
                        serta penulisan kode menggunakan <b>HTML, CSS, Bootstrap, dan PHP</b>.  
                        Website ini diharapkan dapat menjadi contoh karya sederhana namun fungsional untuk kebutuhan informasi sekolah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
