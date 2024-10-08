    <header class="masthead" style="background-image: url('<?= base_url('/assets/Resource/hero/') ?><?php echo $hero->foto ?>')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1><?php echo $hero->judul ?></h1>
                        <span class="subheading"><?php echo $hero->sub_judul ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="content">
        <div class="row">
            <h1 class="mb-4 p-3" style="padding-left: 2rem;"><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDetail Kegiatan Rutin</strong></h1>
            <h2 class="mb-4 p-3" style="padding-left: 2rem;">
                <strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $detail->judul_kegiatan ?></strong>
            </h2>
        </div>
        <img src="<?= base_url('assets/Resource/kegiatan_rutin/' . $detail->foto) ?>" class="img-fluid mx-auto d-block mt-4" style="width: 50% ;box-shadow: 5px 5px 20px #A6ACAF;">
        <div class="row">
            <div class="col mb-4" style="padding-left: 4rem; padding-top: 2rem; padding-right: 4rem;">
                <p><?php echo $detail->deskripsi ?></p>
                <div class="d-flex align-items-center mt-4">
                    <div class="d-flex align-items-center">
                        <i class="align-middle me-2" data-feather="calendar"></i><?php echo $detail->jadwal ?>
                    </div>
                </div>
            </div>
        </div>

        <h3 style="padding-left: 4rem;">Galeri Terkait</h3>
        <div class="row g-1">
            <?php foreach ($galeri_kegiatan as $data_galeri) : ?>
                <div class="col-lg-3 col-md-6" style="padding-left: 4rem;">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="<?= base_url('assets/Resource/galeri_kegiatan/' . $data_galeri->foto) ?>" loading="lazy" class="mb-4" style="width: 100%;">
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>


    </section>