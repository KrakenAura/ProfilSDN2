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

<section class="content">
    <div class="row">
        <h1 class="mb-4 p-3" style="padding-left: 2rem;"><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDetail Prestasi</strong></h1>
        <h2 class="mb-4 p-3" style="padding-left: 2rem;">
            <strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $detail->nama ?></strong>
        </h2>
    </div>
    <div class="row">
        <div class="col mb-4" style="padding-left: 4rem;">
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <tr>
                        <th class="">Prestasi</th>
                        <td class=" w-5">&nbsp :</td>
                        <td class="" style="padding-left: 25px;"><?php echo $detail->nama ?></td>
                    </tr>
                    <tr>
                        <th>Tingkat</th>
                        <td class=" w-5">&nbsp :</td>
                        <td style="padding-left: 25px"><?php echo $detail->tingkat ?></td>
                    </tr>
                    <tr>
                        <th>Tahun</th>
                        <td class=" w-5">&nbsp :</td>
                        <td style="padding-left: 25px"><?php echo $detail->tahun ?></td>
                    </tr>
                    <tr>
                        <th>Jenis</th>
                        <td class=" w-5">&nbsp :</td>
                        <td style="padding-left: 25px"><?php echo $detail->jenis ?></td>
                    </tr>
                </table>
            </div>
            <p><?php echo $detail->deskripsi ?></p>
        </div>
    </div>
    <h3>Galeri Terkait</h3>
    <div class="row g-4">
        <?php foreach ($galeri_prestasi as $data_galeri) : ?>
            <div class="col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/Resource/galeri_prestasi/' . $data_galeri->foto) ?>" loading="lazy" class="mb-4" style="width: 100%;">
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>