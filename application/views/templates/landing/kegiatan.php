    <header class="masthead" style="background-image: url('<?= base_url('/assets/Home/') ?>img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Kegiatan Rutin</h1>
                        <span class="subheading">SD Negeri 2 Mulyoagung</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <h2 class="mb-4">Kegiatan Rutin SD Negeri 2 Mulyoagung</h2>
        <hr class="my-4" />
        <?php foreach ($kegiatan_rutin as $data_kegiatan) : ?>
            <div class="row mb-3">
                <div class="col">
                    <div class="card border bg-light rounded">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="card-title mb-3">
                                    <?php echo $data_kegiatan->judul_kegiatan ?>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12 d-flex flex-column align-items-center position-relative">
                                    <img src="<?= base_url('assets/Resource/kegiatan_rutin/' . $data_kegiatan->foto) ?>" class="border border-3 border-gray mb-4 img-fluid" style="max-width: 40%;" alt="Kegiatan Foto">
                                </div>
                                <div class="col-lg-9 col-md-8 col-12 position-relative">
                                    <p><?php echo $data_kegiatan->deskripsi_singkat ?></p>
                                    <p><?php echo $data_kegiatan->jadwal ?></p>
                                    <div class="d-flex justify-content-end">
                                        <?php echo anchor('index.php/KegiatanRutinController/detail/' . $data_kegiatan->id, '<button class="btn btn-secondary btn-sm me-3 mb-3">Detail Kegiatan</button>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>