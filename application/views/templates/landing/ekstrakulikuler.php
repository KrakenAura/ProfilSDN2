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
        <hr class="my-4" />
        <h2 class="mb-4">Ekstrakulikuler SD Negeri 2 Mulyoagung</h2>
        <?php foreach ($ekstrakulikuler as $data_ekstrakulikuler) : ?>
            <div class="row mb-3">
                <div class="col">
                    <div class="card border bg-light rounded">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="card-title mb-1">
                                    <?php echo $data_ekstrakulikuler->nama ?>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12 d-flex flex-column align-items-center position-relative">
                                    <img src="<?= base_url('assets/Resource/ekstrakulikuler/') ?><?php echo $data_ekstrakulikuler->foto; ?>" class="border border-3 border-gray mb-4 img-fluid" style="max-width: 95%;" alt="Kegiatan Foto">
                                </div>
                                <div class="col-lg-9 col-md-8 col-12 position-relative">
                                    <p><?php echo $data_ekstrakulikuler->deskripsi ?></p>
                                    <p><?php echo $data_ekstrakulikuler->jadwal ?></p>
                                    <div class="d-flex justify-content-end">
                                        <?php echo anchor('index.php/EkstrakulikulerController/detail/' . $data_ekstrakulikuler->id, '<button class="btn btn-secondary btn-sm me-3 mb-3">Detail Ekstrakulikuler</button>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>