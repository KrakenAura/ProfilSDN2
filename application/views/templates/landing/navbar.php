<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-4 py-lg-0">
            <a class="navbar-brand" href="index.html">SD Negeri 2 Mulyoagung
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('HomeController/index') ?>">Home</a></li>
                    <!--<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('HomeController/about') ?>">Tentang Kami</a></li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="tentangDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu " aria-labelledby="tentangDropdown">
                            <a class="dropdown-item" href="<?php echo base_url('index.php/AboutController/index') ?>">About Us</a>
                            <a class="dropdown-item" href="<?php echo base_url('HomeController/visi_misi') ?>">Visi dan Misi</a>
                            <!-- Add more dropdown items as needed -->
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('HomeController/post') ?>">Struktur Organisasi</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('HomeController/post') ?>">Kegiatan Rutin</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('HomeController/post') ?>">Ekstrakuliker</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('HomeController/post') ?>">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('HomeController/contact') ?>">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>