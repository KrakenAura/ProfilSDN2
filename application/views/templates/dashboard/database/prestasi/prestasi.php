            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Prestasi</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Prestasi</th>
                                <th>Tingkat</th>
                                <th>Tahun</th>
                                <th>Jenis</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($prestasi as $data_prestasi) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data_prestasi->nama ?></td>
                                    <td><?php echo $data_prestasi->tingkat ?></td>
                                    <td><?php echo $data_prestasi->tahun ?></td>
                                    <td><?php echo $data_prestasi->jenis ?></td>
                                    <td><?php echo $data_prestasi->deskripsi ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <?php echo anchor(
                                                '/PrestasiController/hapus/' . $data_prestasi->id,
                                                '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                            ) ?>

                                            <?php echo anchor(
                                                '/PrestasiController/edit/' . $data_prestasi->id,
                                                '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                            ) ?>
                                            <?php echo anchor(
                                                '/PrestasiController/tambahFoto/' . $data_prestasi->id,
                                                '<div class="btn btn-success btn-sm"><i class="align-middle me-2" data-feather="image"></i>Galeri</div>'
                                            ) ?>

                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </section>
                    <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#prestasiModal">Tambah Data</button>
                    <!-- Modal Tambah Data-->
                    <div class="modal fade" id="prestasiModal" tabindex="-1" aria-labelledby="prestasiModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="prestasiModalLabel">Tambah Data Prestasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('PrestasiController/tambah'); ?>
                                    <div class="form-group">
                                        <label>Nama Prestasi</label>
                                        <input type="hidden" name="id" class="form-control">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tingkat</label>
                                        <input type="text" name="tingkat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <input type="text" name="tahun" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis</label>
                                        <input type="text" name="jenis" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control">
                                    </div>

                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>