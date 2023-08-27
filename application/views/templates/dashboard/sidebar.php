<body>
    <div class="wrapper">

        <!-- <?php
                if ($this->session->userdata('status') != 'login') {
                    echo '<script type="text/javascript">';
                    echo 'alert("Silahkan Login Terlebih Dahulu");';
                    echo 'window.location="' . base_url('LoginController/index') . '"';
                    echo '</script>';
                } else {
                    echo 'dah login';
                }

                ?> -->

        <?php
        if ($this->session->userdata('status') != 'login') {
            if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
            }
            echo '<p>Silahkan Login Terlebih Dahulu</p>';
        } else {
            echo 'dah login';
        }
        ?>
        <nav id="sidebar" class="sidebar js-sidebar" style=" width: 75%;">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <span class="align-middle">Dashboard SD Negeri 2 Mulyoagung</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pengaturan Data
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/DashboardController/hero') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Hero</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/SambutanController/index') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Sambutan Kepala Sekolah</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/StrukturOrganisasiController/dashboard') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Struktur Organisasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/TentangKamiController/dashboardVisiMisi') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Visi Misi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/KegiatanRutinController/dashboard') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Kegiatan Rutin</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/EkstrakulikulerController/dashboard') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Ekstrakulikuler</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/PrestasiController/dashboard') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Prestasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/ContactController/dashboard') ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Kontak</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('/DashboardController/profil') ?>">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Account</span>
                        </a>
                    </li>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
            </nav>