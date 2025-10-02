<style>
    /* Efek shadow hanya saat discroll */
    .navbar.scrolled {
        box-shadow: 0 4px 6px rgba(83, 73, 73, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }
    body { 
        font-family: Calibri, Helvetica, Arial, sans-serif; 
    }

    /* Ubah teks navbar jadi putih */
    .navbar .nav-link,
    .navbar .navbar-brand {
        color: white !important;
    }

    /* Hover link jadi abu terang */
    .navbar .nav-link:hover {
        color: #ddd !important;
    }

    /* Dropdown biar sama tema (biru & putih) */
    .navbar .dropdown-menu {
        background-color: #0d6efd; /* warna biru bootstrap primary */
        border: none;
    }

    .navbar .dropdown-menu .dropdown-item {
        color: white !important;
    }

    .navbar .dropdown-menu .dropdown-item:hover {
        background-color: #0b5ed7; /* biru lebih gelap saat hover */
        color: #fff !important;
    }
</style>

<nav class="navbar navbar-expand-lg bg-primary shadow sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="galeri/logo.png" width="50">
            SMKN 4 Tasikmalaya
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"> Beranda</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="identitas.php">Identitas Sekolah</a></li>
                        <li><a class="dropdown-item" href="visi.php">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="eskul.php">Ekstrakurikuler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeri.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berita.php">Berita</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- TUTUP NAV -->

<!-- SCRIPT UNTUK EFEK SCROLL -->
<script>
    window.addEventListener("scroll", function() {
        let navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
</script>
