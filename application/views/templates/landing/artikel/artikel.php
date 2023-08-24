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
    <?php foreach ($artikel as $data_artikel) : ?>
        <div class="row mb-3">
            <div class="col">
                <div class="card border bg-light rounded">
                    <div class="card-body">
                        <div class="row">
                            <h3 class="card-title mb-3">
                                <?php echo $data_artikel->judul ?>
                            </h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-12 d-flex flex-column align-items-center position-relative">
                                <img src="<?= base_url('assets/Resource/artikel/' . $data_artikel->foto) ?>" class="border border-3 border-gray mb-4 img-fluid" style="max-width: 60%;" alt="Kegiatan Foto">
                            </div>
                            <div class="col-lg-9 col-md-8 col-12 position-relative">
                                <?php
                                $limit = 100;
                                $description = $data_artikel->isi;

                                if (strlen($description) > $limit) {
                                    $description = substr($description, 0, strrpos(substr($description, 0, $limit), ' ')) . '...';
                                }
                                ?>

                                <p><?php echo $description; ?></p>
                                <p> <span class="material-symbols-outlined" style="font-size: 1.25em;">person</span><?php echo $data_artikel->penulis ?></p>
                                <p><span class="material-symbols-outlined" style="font-size: 1.25em;">calendar_month</span><?php echo $data_artikel->tanggal ?></p>
                                <div class="d-flex justify-content-end">
                                    <?php echo anchor('index.php/ArtikelController/artikel/' . $data_artikel->id, '<button class="btn btn-secondary btn-overlay">Detail</button>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="container">
    <div class="row">
        <div class="col">
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