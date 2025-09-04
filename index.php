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
        }
        .hero {
            position: relative;
            width: 100%;
            height: 85vh; /* perkiraan tinggi layar laptop */
            background: url('galeri/depan.jpg') no-repeat center center/cover;
            overflow: hidden;
            }

        .hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.4); /* lapisan gelap */
        backdrop-filter: blur(1px);   /* efek blur tipis */
        }

        .hero-text {
        position: relative;
        color: white;
        max-width: 600px;
        z-index: 1;
        text-align: left; /* teks di kiri */
        }

        .hero-text h1 {
        font-size: 3rem;
        font-weight: bold;
        }

        .hero-text h2 {
        font-size: 2rem;
        margin-bottom: 15px;
        }


    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'navbar.php';?>


    <!-- HERO SECTION -->
    <section class="hero d-flex align-items-center">
    <div class="container">
        <div class="hero-text">
        <h1>SMK Negeri 4 Tasikmalaya</h1>
        <h2>Sekolah Pusat Keunggulan</h2>
        </div>
    </div>
    </section>



    <br>


    <!-- SECTION SAMBUTAN -->
<div class="container my-5 pt-5">
    <div class="row align-items-center">
        
        <div class="col-lg-4 text-center">
            <img src="galeri/kepalasekolah.CDMQ7SQv.png" height="250px" class="img-fluid rounded shadow" alt="">
        </div>

        
        <div class="col-lg-8">
            <h5>Kurniawan S.Pd, M.Pd</h5>
            <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
            <p>
                Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya. 
                Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini. Kami berharap 
                dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang 
                sekolah kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita bersama. 
                Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki. 
                Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.
            </p>
            <p>
                Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan 
                satu persatu atas segala bantuan dan fasilitasnya. Semoga semua yang kita lakukan bermanfaat bagi masyarakat.
            </p>
            <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
        </div>
    </div>
</div>
<!-- TUTUP SECTION SAMBUTAN -->

    <div class="container">
        <!-- SECTION STATISTIK -->

        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <h2>1500</h2>
                            Peserta Didik
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <h2>100</h2>
                            Pendidik
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <h2>45</h2>
                            Rombel
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <h2>5</h2>
                            Program Keahlian
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- TUTUP SECTION STATISTIK -->

        <br>
        <br>

        <!-- SECTION GALERI -->
         <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center"><b>Galeri</b></h2>
                <br>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="galeri/g1.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="galeri/g2.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="galeri/g3.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="galeri/g4.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <a class="btn btn-primary" href="galeri.html ">Intip Lainnya</a>
                </div>
            </div>
         </div>

        <!-- TUTUP SECTION GALERI -->
         <br>
         <br>


    
        <!-- SECTION BERITA -->
        <div class="row">
            <div class="col-lg-12">

                <h2 class="text-center"><b>Berita</b></h2>
                <br>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <img src="galeri/berita1.JPG" alt="" class="w-100 w-50">
                            </div>
                            <div class="card-body">
                                <h3>JOB FAIR</h3>
                                <a class="btn btn-primary" href="https://radarpangandaran.com/gaya-hidup/smkn-4-tasikmalaya-gelar-job-fair-2024-dibutuhkan-200-pencari-kerja-ini-cara-daftarnya/">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <img src="galeri/berita2.JPG" alt="" class="w-100 w-50">
                            </div>
                            <div class="card-body">
                                <h3>MBG</h3>
                                <a class="btn btn-primary" href="https://www.antaranews.com/tag/mbg-di-sekolah">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- TUTUP SECTION BERITA -->    
    </div>
    <br><br>




     <?php include 'footer.php';?>

       
   
    
       

</body>

</html>
