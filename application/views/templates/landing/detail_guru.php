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
        <div class="row justify-content-around">
            <div class="col-4 border mb-4">
                <!-- <img src="<?php echo base_url('assets/Resource/struktur_organisasi') ?><?php echo $detail->foto ?>"> -->
                <img src="<?= base_url('assets/Resource/struktur_organisasi/' . $detail->foto) ?>" class="rounded mx-auto d-block" style="width: 400px;">

            </div>
            <div class="col-4 border mb-4">
                <table class="table">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td><?php echo $detail->nama ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Identitas Pegawai Negeri Sipil</th>
                        <td><?php echo $detail->nip ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td><?php echo $detail->jabatan ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo $detail->status ?></td>
                    </tr>
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td><?php echo $detail->mata_pelajaran ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo $detail->jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $detail->email ?></td>
                    </tr>
                </table>
                <br>
                <br>
            </div>
        </div>



    </section>