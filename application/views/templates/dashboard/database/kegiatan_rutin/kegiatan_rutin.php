            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> kegiatan_rutin Kepala Sekolah</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Judul Kegiatan</th>
                                <th>Deskripsi Singkat</th>
                                <th>Deskripsi</th>
                                <th>Jadwal</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($kegiatan_rutin as $data_kegiatan_rutin) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><img src="<?= base_url('assets/Resource/kegiatan_rutin/') ?><?php echo $data_kegiatan_rutin->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                    <td><?php echo $data_kegiatan_rutin->judul_kegiatan ?></td>
                                    <td><?php echo $data_kegiatan_rutin->deskripsi_singkat ?></td>
                                    <td><?php echo $data_kegiatan_rutin->deskripsi ?></td>
                                    <td><?php echo $data_kegiatan_rutin->jadwal ?></td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/kegiatan_rutinController/edit/' . $data_kegiatan_rutin->id,
                                            '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                        ) ?>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </table>
                    </section>
                    <!--Section Modal Edit -->
                </div>
            </main>