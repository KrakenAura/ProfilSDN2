            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Ekstrakulikuler</h1>
                    <!--Section Table -->
                    <section class="content">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="col-1 text-center" style="width: 8%;">No</th>
                                    <th class="col-6 text-center" style="width: 9%;">Foto</th>
                                    <th class="col-2 text-center" style="width: 18%;">Nama Ekstrakulikuler</th>
                                    <th class="col-3 text-center" style="width: 18%;">Deskripsi</th>
                                    <th class="col-4 text-center" style="width: 18%;">Manfaat</th>
                                    <th class="col-5 text-center" style="width: 18%;">Jadwal</th>
                                    <th class="col-7 text-center" style="width: 18%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($ekstrakulikuler as $data_ekstrakulikuler) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><img src="<?= base_url('assets/Resource/ekstrakulikuler/') ?><?php echo $data_ekstrakulikuler->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                        <td class="text-center"><?php echo $data_ekstrakulikuler->nama ?></td>
                                        <td class="text-center"><?php echo $data_ekstrakulikuler->deskripsi ?></td>
                                        <td class="text-center"><?php echo $data_ekstrakulikuler->manfaat ?></td>
                                        <td class="text-center"><?php echo $data_ekstrakulikuler->jadwal ?></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <?php echo anchor(
                                                    '/EkstrakulikulerController/hapus/' . $data_ekstrakulikuler->id,
                                                    '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                                ) ?>

                                                <?php echo anchor(
                                                    '/EkstrakulikulerController/edit/' . $data_ekstrakulikuler->id,
                                                    '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                                ) ?>
                                                <?php echo anchor(
                                                    '/EkstrakulikulerController/tambahFoto/' . $data_ekstrakulikuler->id,
                                                    '<div class="btn btn-success btn-sm"><i class="align-middle me-2" data-feather="image"></i>Galeri</div>'
                                                ) ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </section>
                    <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#EkstrakulikulerModal">Tambah Data Kegiatan Rutin</button>

                    <!--Section Modal Edit -->
                    <div class="modal fade" id="EkstrakulikulerModal" tabindex="-1" aria-labelledby="EkstrakulikulerModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EkstrakulikulerModalLabel">Tambah Data Kegiatan Rutin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('EkstrakulikulerController/tambah'); ?>
                                    <div class="form-group">
                                        <label>Nama Ekstrakulikuler</label>
                                        <input type="hidden" name="id" class="form-control">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Manfaat</label>
                                        <input type="text" name="manfaat" class="form-control">
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
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>