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

    <!-- <img src="<?= base_url('/assets/Resource/sambutan/avatar.jpg') ?>" class="card-img-top" alt="..."> -->
    <!-- Struktur Organisasi Cards-->
    <!-- <div class="card-group">
        <div class="card">
            <div class="card-body">
                <img src="<?= base_url('/assets/Resource/sambutan/avatar.jpg') ?>" class="card-img-top" alt="...">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= base_url('/assets/Resource/sambutan/avatar.jpg') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div> -->

    <section>
        <div class="container">
            <div class="row g-4">
                <?php foreach ($struktur_organisasi as $data_struktur) : ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="<?= base_url('assets/Resource/struktur_organisasi/' . $data_struktur->foto) ?>" loading="lazy" class="rounded-circle border border-primary border-4">
                                <h3 class="card-title mb-3">
                                    <?php echo $data_struktur->nama ?>
                                </h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Similique, veritatis aliquam saepe natus id fugit.
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>