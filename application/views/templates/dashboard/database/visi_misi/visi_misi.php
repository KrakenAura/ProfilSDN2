            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Visi Misi</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th class="col-1" style="width: 15%;">No</th>
                                <th class="col-2" style="width: 55%;">Visi</th>
                                <th class="col-3" style="width: 30%;">Action</th>
                            </tr>

                            <?php
                            $no = 1;
                            foreach ($visi as $data_visi) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data_visi->visi ?></td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/TentangKamiController/hapus/' . $data_visi->id . '/' . 'visi',
                                            '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                        ) ?>
                                        <?php echo anchor(
                                            '/index.php/TentangKamiController/edit/' . $data_visi->id . '/' . 'visi',
                                            '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                        ) ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                        <button class="btn btn-primary btn-overlay mb-3" data-bs-toggle="modal" data-bs-target="#visiModal">Tambah Visi</button>
                        <table class="table">
                            <tr>
                                <th class="col-1" style="width: 15%;">No</th>
                                <th class="col-2" style="width: 55%;">Misi</th>
                                <th class="col-3" style="width: 30%;">Action</th>
                            </tr>

                            <?php
                            $no = 1;
                            foreach ($misi as $data_misi) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data_misi->misi ?></td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/TentangKamiController/hapus/' . $data_misi->id . '/' . 'misi',
                                            '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                        ) ?>
                                        <?php echo anchor(
                                            '/index.php/TentangKamiController/edit/' . $data_misi->id . '/' . 'misi',
                                            '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                        ) ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                        <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#MisiModal">Tambah Misi</button>
                    </section>



                    <!-- Modal -->
                    <div class="modal fade" id="visiModal" tabindex="-1" aria-labelledby="visiModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="visiModalLabel">Tambah Data Visi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('index.php/TentangKamiController/tambah/visi'); ?>
                                    <div class="form-group">
                                        <label>Visi</label>
                                        <input type="hidden" name="id" class="form-control">
                                        <input type="text" name="visi" class="form-control">
                                    </div>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="MisiModal" tabindex="-1" aria-labelledby="MisiModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="MisiModalLabel">Tambah Data Misi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('index.php/TentangKamiController/tambah/misi'); ?>
                                    <div class="form-group">
                                        <label>Misi Baru</label>
                                        <input type="hidden" name="id" class="form-control">
                                        <input type="text" name="misi" class="form-control">
                                    </div>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <!-- </form> -->
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>