    <header class="masthead" style="background-image: url('<?= base_url('/assets/Home/') ?>img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Home</h1>
                        <span class="subheading">Halaman Utama</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Section Sambutan-->
    <section class="container-custom">
        <div class="row">
            <div class="col-12 col-sm-6 d-md-flex justify-content-md-ceneter" style="padding-left: 200px">
                <img src="<?= base_url('assets/Resource/sambutan/') ?>unsplash-1.jpg" alt="Foto Kepsek" width="533" Loading="lazy">
            </div>
            <div class="col-12 col-sm-6 align-self-center justify-content-md-ceneter">
                <div class="content-width">
                    <span>
                        <h1 class="h2 mb-4">Sambutan Kepala Sekolah</h1>
                        <p class="mb-4">
                            <?php foreach ($sambutan as $sambutan) : ?>
                        <p><?php echo $sambutan->sambutan ?></p>
                        <h5 style="color: #17202A"><?php echo $sambutan->nama_kepsek ?></h5>
                    <?php endforeach ?>
                    </p>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                        <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 24, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">I believe every human has a finite number of heartbeats. I don't
                            intend to waste any of mine.</h2>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 18, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">Science has not yet mastered prophecy</h2>
                        <h3 class="post-subtitle">We predict too much for the next year and yet far too little for
                            the next ten.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on August 24, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">Failure is not an option</h2>
                        <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our
                            duty to future generations.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on July 8, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>