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

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <article class="article">
                <h1 class="mb-3"><strong><?php echo $artikel->judul ?></strong></h1>
                <h6 class="">
                    <span class="material-symbols-outlined" style="font-size: 1.25em;">person</span>
                    <?php echo $artikel->penulis ?>
                </h6>
                <h6 class="mb-3">
                    <span class="material-symbols-outlined" style="font-size: 1.25em;">calendar_month</span>
                    <?php echo $artikel->tanggal ?>
                </h6>
                <img src="<?= base_url('assets/Resource/artikel/' . $artikel->foto) ?>" class="mb-4" style="width: 50%;">
                <p><?php echo $artikel->isi ?></p>
            </article>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Eksplorasi Berita dan Informasi SDN 2 Mulyoagung</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url('/index.php/ArtikelController/artikel') ?>">Berita</a></li>
                        <li><a href="<?= base_url('/index.php/ArtikelController/artikel') ?>">Informasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>