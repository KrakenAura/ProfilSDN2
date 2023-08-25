            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Kegiatan Rutin</h1>
                    <!--Section Table -->
                    <section class="content">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="col-1 text-center" style="width: 10%;">No</th>
                                    <th class="col-2 text-center" style="width: 15%;">Foto</th>
                                    <th class="col-3 text-center" style="width: 15%;">Judul Kegiatan</th>
                                    <th class="col-4 text-center" style="width: 15%;">Deskripsi Singkat</th>
                                    <th class="col-5 text-center" style="width: 25%;">Deskripsi</th>
                                    <th class="col-6 text-center" style="width: 15%;">Jadwal</th>
                                    <th class="col-7 text-center" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kegiatan_rutin as $data_kegiatan_rutin) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><img src="<?= base_url('assets/Resource/kegiatan_rutin/') ?><?php echo $data_kegiatan_rutin->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                        <td class="text-center"><?php echo $data_kegiatan_rutin->judul_kegiatan ?></td>
                                        <td class="text-center"><?php echo $data_kegiatan_rutin->deskripsi_singkat ?></td>
                                        <td class="text-center"><?php echo $data_kegiatan_rutin->deskripsi ?></td>
                                        <td class="text-center"><?php echo $data_kegiatan_rutin->jadwal ?></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <?php echo anchor(
                                                    '/index.php/KegiatanRutinController/hapus/' . $data_kegiatan_rutin->id,
                                                    '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                                ) ?>

                                                <?php echo anchor(
                                                    '/index.php/KegiatanRutinController/edit/' . $data_kegiatan_rutin->id,
                                                    '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                                ) ?>
                                                <?php echo anchor(
                                                    '/index.php/KegiatanRutinController/tambahFoto/' . $data_kegiatan_rutin->id,
                                                    '<div class="btn btn-success btn-sm"><i class="align-middle me-2" data-feather="plus"></i>Tambah Foto</div>'
                                                ) ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </section>
                    <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#kegiatanModal">Tambah Data Kegiatan Rutin</button>

                    <!--Section Modal Edit -->
                    <div class="modal fade" id="kegiatanModal" tabindex="-1" aria-labelledby="kegiatanModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="kegiatanModalLabel">Tambah Data Kegiatan Rutin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('index.php/KegiatanRutinController/tambah'); ?>
                                    <div class="form-group">
                                        <label>Judul Kegiatan</label>
                                        <input type="hidden" name="id" class="form-control">
                                        <input type="text" name="judul_kegiatan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Singkat</label>
                                        <input type="text" name="deskripsi_singkat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jadwal</label>
                                        <input type="text" name="jadwal" class="form-control">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label>Foto Kegiatan</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <!-- </form> -->
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>