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

    <section class="content">
        <div class="row">
            <h1 class="mb-4 p-3" style="padding-left: 2rem;"><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDetail Kegiatan Rutin</strong></h1>
            <h2 class="mb-4 p-3" style="padding-left: 2rem;">
                <strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $detail->nama ?></strong>
            </h2>
        </div>
        <img src="<?= base_url('assets/Resource/ekstrakulikuler/' . $detail->foto) ?>" class="img-fluid mx-auto d-block mt-4" style="width: 50% ;box-shadow: 5px 5px 20px #A6ACAF;">
        <div class="row">
            <div class="col mb-4" style="padding-left: 4rem;">
                <p><?php echo $detail->deskripsi ?></p>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined" style="font-size: 1.25em;">
                            calendar_month
                        </span>
                        <p class="mb-4">
                            <?php echo $detail->jadwal ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </section>