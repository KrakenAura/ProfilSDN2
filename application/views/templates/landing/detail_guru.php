    <header class="masthead" style="background-image: url('<?= base_url('/assets/Home/') ?>img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Struktur Organisasi</h1>
                        <span class="subheading">SD Negeri 2 Mulyoagung</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="content">
        <h4 class="mb-4 p-3"><strong>Detail Data Guru</strong></h4>
        <div class="row justify-content-center">
            <div class="col-4 mb-4 ">
                <!-- <div class="card rounded" style=" background-color:#FFFFFF; box-shadow: 5px 5px 20px #A6ACAF; padding: 5px 10px;"> -->
                <img src="<?= base_url('assets/Resource/struktur_organisasi/' . $detail->foto) ?>" class="img-fluid mx-auto d-block mt-4" style="width: 300px ;box-shadow: 5px 5px 20px #A6ACAF;">
                <br>
                <br>

                <!-- </div> -->

            </div>
            <div class="col-4 mb-4 ">
                <table class="table-responsive mt-3 ">
                    <tr>
                        <th class="">Nama Lengkap</th>
                        <td class=" w-5">&nbsp :</td>
                        <td class="" style="padding-left: 25px;"><?php echo $detail->nama ?></td>
                    </tr>

                    <tr>
                        <th>NIP</th>
                        <td class=" w-5">&nbsp :</td>
                        <td style="padding-left: 25px"><?php echo $detail->nip ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td class=" w-5">&nbsp :</td>
                        <td style="padding-left: 25px"><?php echo $detail->jabatan ?></td>
                    </tr>
                    <tr>
                        <th>Status :</th>
                        <td class=" w-5">&nbsp :</td>

                        <td style="padding-left: 25px"><?php echo $detail->status ?></td>
                    </tr>
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td class=" w-5">&nbsp :</td>

                        <td style="padding-left: 25px"><?php echo $detail->mata_pelajaran ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td class=" w-5">&nbsp :</td>
                        <td style="padding-left: 25px"><?php echo $detail->jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td class=" w-5">&nbsp :</td>
                        <td style="padding-left: 25px"><?php echo $detail->email ?></td>
                    </tr>
                </table>
                <br>
                <br>
            </div>
        </div>



    </section>