            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Struktur Organisasi</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Mata Pelajaran</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Foto</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($struktur_organisasi as $data_struktur) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data_struktur->nama ?></td>
                                    <td><?php echo $data_struktur->nip ?></td>
                                    <td><?php echo $data_struktur->jabatan ?></td>
                                    <td><?php echo $data_struktur->status ?></td>
                                    <td><?php echo $data_struktur->mata_pelajaran ?></td>
                                    <td><?php echo $data_struktur->jenis_kelamin ?></td>
                                    <td><?php echo $data_struktur->email ?></td>

                                    <td><img src="<?= base_url('assets/Resource/struktur_organisasi/') ?><?php echo $data_struktur->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/SambutanController/edit/' . $data_struktur->id,
                                            '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                        ) ?>
                                    </td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/SambutanController/edit/' . $data_struktur->id,
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