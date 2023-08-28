            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Profil Sekolah</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($profil_sekolah as $data_profil) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><img src="<?= base_url('assets/Resource/profil_sekolah/') ?><?php echo $data_profil->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                    <td><?php echo $data_profil->deskripsi ?></td>
                                    <td 59>
                                        <?php echo anchor(
                                            '/TentangKamiController/editProfil/' . $data_profil->id,
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