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

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <img src="<?= base_url('assets/Resource/sambutan/' . $sambutan[0]->foto) ?>" alt="Foto Kepsek" loading="lazy" class="img-fluid float-end" style="width: 500px;">
            </div>
            <div class="col">
                <div class="content-width">
                    <h2 class="text-sm">Sambutan Kepala Sekolah</h1>
                        <?php foreach ($sambutan as $sambutanItem) : ?>
                            <p><?php echo $sambutanItem->sambutan ?></p>
                            <h5 style="color: #17202A;"><?php echo $sambutanItem->nama_kepsek ?></h5>
                        <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4" />



    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <?php
                // Sort the articles array by ID in descending order
                usort($artikel, function ($a, $b) {
                    return $b->id - $a->id;
                });

                $counter = 0; // Initialize a counter variable

                foreach ($artikel as $data_artikel) :
                    if ($counter < 3) : // Limit to 3 articles
                ?>
                        <div class="post-preview">
                            <a href="<?php base_url('index.php/ArtikelController/artikel/' . $data_artikel->id) ?>">
                                <h2 class="post-title"><?php echo $data_artikel->judul ?></h2>
                            </a>
                            <p class="post-meta">
                                Ditulis oleh
                                <a><?php echo $data_artikel->penulis ?></a>
                                pada <?php echo $data_artikel->tanggal ?>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                <?php
                        $counter++; // Increment the counter
                    endif;
                endforeach;
                ?>
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="<?php echo base_url('ArtikelController/index') ?>">Artikel Lainnya →</a></div>
            </div>
        </div>
    </div>