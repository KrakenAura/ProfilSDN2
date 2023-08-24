<!-- Page Header-->
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
<!-- Main Content-->
<main class="mb-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h3 style="text-align: center;" class="mb-4">Lokasi Kami</h3>
                <div class="embed-responsive embed-responsive-16by9" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.94652735705!2d112.57548016024195!3d-7.9225540218391135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881879ed99b0f%3A0xd0ce37817214a2f7!2sSdn%2002%20Mulyoagung!5e0!3m2!1sid!2sid!4v1692337346890!5m2!1sid!2sid" frameborder="0" allowfullscreen="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-center mb-4">Kontak Kami</h3>
                <?php foreach ($sosial_media as $data_sosmed) : ?>
                    <div class="row mb-2">
                        <div class="col-4 d-flex align-items-center justify-content-end">
                            <img src="<?= base_url('assets/Resource/iconSosmed/') ?><?php echo $data_sosmed->icon; ?>" class="img-fluid" style="max-width: 15%;">
                        </div>
                        <div class="col-8 d-flex align-items-center">
                            <a href="<?php echo $data_sosmed->link ?>">
                                <p>
                                    <?php echo $data_sosmed->platform ?> : <?php echo $data_sosmed->kontak ?>
                                </p>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</main>