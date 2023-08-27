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

<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center border">No</th>
                            <th class="text-center border">Prestasi</th>
                            <th class="text-center border">Tingkat</th>
                            <th class="text-center border">Tahun</th>
                            <th class="text-center border">Jenis</th>
                            <th class="text-center border">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($prestasi as $data_prestasi) : ?>
                            <tr>
                                <td class="text-center border"><?php echo $no++ ?></td>
                                <td class="text-center border"><?php echo $data_prestasi->nama ?></td>
                                <td class="text-center border"><?php echo $data_prestasi->tingkat ?></td>
                                <td class="text-center border"><?php echo $data_prestasi->tahun ?></td>
                                <td class="text-center border"><?php echo $data_prestasi->jenis ?></td>
                                <td class="text-center border">
                                    <?php echo anchor('PrestasiController/detail/' . $data_prestasi->id, '<button class="btn btn-secondary btn-sm me-3 mb-3">Detail</button>') ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>