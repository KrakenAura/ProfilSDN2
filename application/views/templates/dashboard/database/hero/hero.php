            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Wallpaper</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Halaman</th>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Sub Judul</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($hero as $data_hero) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><strong><?php echo $data_hero->halaman ?></strong></td>
                                    <td><img src="<?= base_url('assets/Resource/hero/') ?><?php echo $data_hero->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                    <td><?php echo $data_hero->judul ?></td>
                                    <td><?php echo $data_hero->sub_judul ?></td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/DashboardController/edit_hero/' . $data_hero->id,
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