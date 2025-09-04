<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <title>Galeri SMKN 4 Tasikmalaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .gallery-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .gallery-title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .title-line {
            width: 80px;
            height: 2px;
            background-color: #555;
            margin: 10px auto 30px auto;
        }
        .gallery-item img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s;
            cursor: pointer;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php';?>


    <!-- SECTION GALERY -->
    <?php
       $galeri = [
         'galeri/g1.JPG',
         'galeri/g2.JPG',
         'galeri/g3.JPG',
         'galeri/g4.JPG',
         'galeri/g1.JPG',
         'galeri/g2.JPG',
         'galeri/g3.JPG',
         'galeri/g4.JPG' 
       ];
       $i = 0;
    ?>

    <div class="container gallery-container">
        <h2 class="gallery-title">Upacara Peringatan HUT RI Ke-80</h2>
        <div class="title-line"></div>

        <div class="row g-3">
            <?php while ($i < count($galeri)) : ?>
            <div class="col-md-3 col-sm-6 gallery-item">
                <img src="<?=$galeri[$i]?>" alt="Foto 1">
            </div>
           <?php $i++; ?>
           <?php endwhile;?>
        </div>
    </div>


    <?php
       $galeri = [
         'galeri/gu1.JPG',
         'galeri/gu2.JPG',
         'galeri/gu3.JPG',
         'galeri/gu4.JPG',
         'galeri/gu8.JPG',
         'galeri/gu6.JPG',
         'galeri/gu7.JPG',
         'galeri/gu5.JPG'
       ];
       $i = 0;
    ?>

    <div class="container gallery-container">
        <h2 class="gallery-title">Guru SMKN 4 Tasikmalaya</h2>
        <div class="title-line"></div>

        <div class="row g-3">
            <?php while ($i < count($galeri)) : ?>
            <div class="col-md-3 col-sm-6 gallery-item">
                <img src="<?=$galeri[$i]?>" alt="Foto 1">
            </div>
           <?php $i++; ?>
           <?php endwhile;?>
        </div>
    </div>

     <?php
       $galeri = [
         'galeri/j3.JPG',
         'galeri/j4.JPG',
         'galeri/j5.JPG',
         'galeri/j6.JPG',
         'galeri/j7.JPG',
         'galeri/j8.JPG',
         'galeri/j1.JPG',
         'galeri/j2.JPG'
       ];
       $i = 0;
    ?>

    <div class="container gallery-container">
        <h2 class="gallery-title">Job Fair Tahun 2024</h2>
        <div class="title-line"></div>

        <div class="row g-3">
            <?php while ($i < count($galeri)) : ?>
            <div class="col-md-3 col-sm-6 gallery-item">
                <img src="<?=$galeri[$i]?>" alt="Foto 1">
            </div>
             <?php $i++; ?>
           <?php endwhile;?>
        </div>
    </div>

    <!-- TUTUP SECTION GALERY -->

    <br><br>

    <?php include 'footer.php';?>

</body>
</html>
