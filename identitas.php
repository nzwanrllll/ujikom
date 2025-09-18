<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <title>Identitas Sekolah - SMKN 4 Tasikmalaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .identity-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 900px;
            margin: 0 auto;
        }
        .identity-card p {
            margin: 6px 0;
        }
        .label {
            display: inline-block;
            width: 250px;
            font-weight: 500;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php';?>

    <br>
    <div class="container">
        <!-- SECTION IDENTITAS SEKOLAH -->

        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="text-decoration-none">Identitas<span style="color: #007bff;"> Sekolah</span></h3>
            </div>
        </div>

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="galeri/logo.png" alt="Logo Sekolah" class="rounded-3" width="185">
                        <br><br>
                        <div class="identity-card text-start" style="border: 2px solid rgba(0,123,255,0.3); box-shadow: 0 4px 15px rgba(0,123,255,0.5); border-radius: 10px;">
                            <p><span class="label">Nama Sekolah</span>: SMK Negeri 4 Kota Tasikmalaya</p>
                            <p><span class="label">NPSN</span>: 20276063</p>
                            <p><span class="label">Alamat</span>: Jl Depok RT 02 RW 05, Kelurahan Sukamenak, Kecamatan Purbaratu, Kota Tasikmalaya, Jawa Barat</p>
                            <p><span class="label">Telp/Faks</span>: (0265) 7528981</p>
                            <p><span class="label">Email</span>: info@smkn4-tsm.sch.id</p>
                            <p><span class="label">Tahun Berdiri</span>: 2010</p>
                            <p><span class="label">Nomor SK Pendirian</span>: 420/9/SK-BPPT/2012</p>
                            <p><span class="label">Tanggal SK</span>: 06 Februari 2012</p>
                            <p><span class="label">Kepemilikan</span>: Pemerintah Daerah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <br>
    <br>

   <?php include 'footer.php';?>

</body>

</html>
