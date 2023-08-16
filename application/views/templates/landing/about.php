        <header class="masthead" style="background-image: url('<?= base_url('/assets/Home/') ?>img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About Us</h1>
                            <span class="subheading">Halo</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <!-- <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
                    </div>
                </div>
            </div>
        </main> -->
        <main>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row border">
                    <div class="col-md-6 border">
                        <?php foreach ($profil_sekolah as $data_profil) : ?>
                            <img src="<?= base_url('assets/Resource/profil_sekolah/' . $data_profil->foto) ?>" loading="lazy" class="img-fluid mx-auto d-block mt-4" style="width: 500px;">
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-6 border">
                        <div class="content-width">
                            <?php foreach ($profil_sekolah as $data_profil) : ?>
                                <p><?php echo $data_profil->deskripsi ?></p>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Visi Kami</h2>
                        <ul>
                            <?php foreach ($visi as $data_visi) : ?>
                                <li>
                                    <p><?php echo $data_visi->visi ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h2>Misi Kami</h2>
                        <ul>
                            <?php foreach ($misi as $data_misi) : ?>
                                <li>
                                    <p><?php echo $data_misi->misi ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>


        </main>