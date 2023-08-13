            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Sambutan Kepala Sekolah</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Kepala Sekolah</th>
                                <th>Foto Kepala Sekolah</th>
                                <th>Sambutan Kepala Sekolah</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($sambutan as $sambutan) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $sambutan->nama_kepsek ?></td>
                                    <td><?php echo $sambutan->foto ?></td>
                                    <td><?php echo $sambutan->sambutan ?></td>
                                    <td><?php echo anchor('SambutanController/edit/', '<div class="btn btn-primary btn-sm">
                                            <i class="align-middle me-2" data-feather="edit"></i>
                                            Edit
                                        </div>') ?>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </table>
                    </section>
                    <!--Section Modal Edit -->
                </div>
            </main>