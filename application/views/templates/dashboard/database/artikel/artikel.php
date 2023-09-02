            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Artikel</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tanggal</th>
                                <th>Isi</th>
                                <th>Jenis</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($artikel as $data_artikel) : ?>
                                <tr>

                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data_artikel->judul ?></td>
                                    <td><?php echo $data_artikel->penulis ?></td>
                                    <td><?php echo $data_artikel->tanggal ?></td>
                                    <td>
                                        <?php
                                        $isi = $data_artikel->isi;
                                        $words = explode(' ', $isi);
                                        $trimmed_content = implode(' ', array_slice($words, 0, 50));
                                        if (count($words) > 50) {
                                            $trimmed_content .= ' (...)';
                                        }
                                        echo $trimmed_content;
                                        ?>
                                    </td>
                                    <td><?php echo $data_artikel->jenis ?></td>
                                    <td><img src="<?= base_url('assets/Resource/artikel/') ?><?php echo $data_artikel->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <?php echo anchor(
                                                '/ArtikelController/hapus/' . $data_artikel->id,
                                                '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                            ) ?>

                                            <?php echo anchor(
                                                '/ArtikelController/edit/' . $data_artikel->id,
                                                '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                            ) ?>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </table>
                    </section>
                    <!--Section Modal Edit -->
                </div>
            </main>