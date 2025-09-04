<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <title>SMKN 4 Tasikmalaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'navbar.php';?>

    <section
        style="background-image: url(galeri/gelombang-putih.jpg); background-size: cover; background-position: center; padding: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center pt-5">Ekstrakurikuler</h2><br>
                </div>
            </div>

            <!-- pencarian -->
            <div class="container mt-4">
                <div class="input-group mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari eskul (contoh: paskibra, pks, plh, pmr, pramuka, perisai diri, it club, english club, cinematography, laskar pustaka, irma, futsal, basket, volly, sepak bola, seni)">
                    <button class="btn btn-primary" onclick="cariEskul()">Cari</button>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Semua div di bawah ini diberi id sesuai nama eskul -->

                <div class="col-lg-4" id="paskibra">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/paskibra.CUSrUT02.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Paskibra</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" id="pks">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/pks.Dq5fCjv5.png" style="width: 200px; height: 200px;" alt="">
                            <h5>PKS</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" id="plh">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/plh.CiRRajfk.png" style="width: 200px; height: 200px;" alt="">
                            <h5>PLH</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="pmr">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/pmr.DcEPzLrL.png" style="width: 200px; height: 200px;" alt="">
                            <h5>PMR</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="pramuka">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/pramuka._o46wF_H.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Pramuka</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="perisai diri">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/pd.BOb73STp.jpg" style="width: 200px; height: 200px;" alt="">
                            <h5>Perisai Diri</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="it club">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/itclub.git_ccFJ.png" style="width: 200px; height: 200px;" alt="">
                            <h5>IT Club</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="english club">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/englishclub.B6WEchF5.png" style="width: 200px; height: 200px;" alt="">
                            <h5>English Club</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="cinematography">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/cinematography.BbBViTYp.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Cinematography</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="laskar pustaka">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/laskarpustaka.DDtrwf_K.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Laskar Pustaka</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="irma">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/irma.DWG1-rKq.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Irma</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="bulu tangkis">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/bulutangkis.BNw_YZPx.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Bulu Tangkis</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="futsal">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/futsal.CyJOdm1z.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Futsal</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="basket">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/basket.BWLdsiHC.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Basket</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="volly">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/volly.Cc0VXRG-.jpeg" style="width: 200px; height: 200px;" alt="">
                            <h5>Volly</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="sepak bola">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/sepakbola.B13aM3Fk.jpeg" style="width: 200px; height: 200px;" alt="">
                            <h5>Sepak Bola</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-5" id="seni">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="galeri/osis.BxfLHll2.png" style="width: 200px; height: 200px;" alt="">
                            <h5>Seni</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function cariEskul() {
            const input = document.getElementById('searchInput').value.toLowerCase().trim();
            const eskulValid = [
                'paskibra', 'pks', 'plh', 'pmr', 'pramuka', 'perisai diri',
                'it club', 'english club', 'cinematography', 'laskar pustaka',
                'irma', 'futsal', 'basket', 'volly', 'sepak bola', 'seni', 'bulu tangkis'
            ];

            if (eskulValid.includes(input)) {
                const target = document.getElementById(input);
                if (target) {
                    alert("Eskul " + input.toUpperCase() + " ditemukan, scroll ke bawah.");
                    const navbar = document.querySelector('.navbar');
                    const navbarHeight = navbar ? navbar.offsetHeight : 0;
                    const elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    const offsetPosition = elementPosition - navbarHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                } else {
                    alert("Eskul ditemukan tapi tidak bisa scroll. Periksa ID-nya.");
                }
            } else {
                alert("Eskul tidak ditemukan: " + input);
            }
        }
    </script>

    <?php include 'footer.php';?>

</body>

</html>
