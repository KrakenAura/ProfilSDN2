            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Ekstrakulikuler</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($galeri_ekstrakulikuler as $data_galeri) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><img src="<?= base_url('assets/Resource/galeri_ekstrakulikuler/') ?><?php echo $data_galeri->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <?php echo anchor(
                                                '/EkstrakulikulerController/hapusFoto/' . $data_galeri->id,
                                                '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                            ) ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                        <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#galeriModal">Tambah Data</button>
                    </section>
                </div>
                <!-- Modal Tambah Data-->
                <div class="modal fade" id="galeriModal" tabindex="-1" aria-labelledby="galeriModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="galeriModalLabel">Tambah Data Galeri Ekstrakulikuler</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('EkstrakulikulerController/inputFoto'); ?>
                                <div class="form-group">
                                    <label>Tambah Foto</label>
                                    <input type="hidden" name="id" class="form-control">
                                    <input type="file" name="foto" class="form-control">
                                    <input type="hidden" name="id_ekstrakulikuler" value="<?= $id_ekstrakulikuler; ?>" class="form-control">
                                </div>

                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>

                                <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const idEkstrakulikulerInput = document.querySelector('[name="id_Ekstrakulikuler"]');
                        idEkstrakulikulerInput.value = <?= $id_ekstrakulikuler; ?>;
                    });
                </script>
            </main>