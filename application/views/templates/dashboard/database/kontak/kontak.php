            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Kontak</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 5%;" class="text-center border">No</th>
                                    <th style="width: 15%;" class="text-center border">Logo</th>
                                    <th style="width: 20%;" class="text-center border">Platform</th>
                                    <th style="width: 25%;" class="text-center border">Kontak</th>
                                    <th style="width: 25%;" class="text-center border">Link</th>
                                    <th style="width: 25%;" class="text-center border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($sosial_media as $data_sosmed) : ?>
                                    <tr>
                                        <td class="text-center border"><?php echo $no++ ?></td>
                                        <td class="text-center border"><img src="<?= base_url('assets/Resource/iconSosmed/') ?><?php echo $data_sosmed->icon; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                        <td class="text-center border"><?php echo $data_sosmed->platform ?></td>
                                        <td class="text-center border"><?php echo $data_sosmed->kontak ?></td>
                                        <td class="text-center border"><?php echo $data_sosmed->link ?></td>
                                        <td>
                                            <?php echo anchor(
                                                '/index.php/ContactController/hapus/' . $data_sosmed->id,
                                                '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                            ) ?>
                                        </td>
                                        <td class="text-center border">
                                            <?php echo anchor(
                                                '/index.php/ContactController/edit/' . $data_sosmed->id,
                                                '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                            ) ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>

                        </table>
                    </section>
                    <!--Section Modal Edit -->
                    <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#ContactModal">Tambah Data Kontak</button>

                    <!--Section Modal Edit -->
                    <div class="modal fade" id="ContactModal" tabindex="-1" aria-labelledby="ContactModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ContactModalLabel">Tambah Data Kontak</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('index.php/ContactController/tambah'); ?>
                                    <div class="form-group">
                                        <label>Platform</label>
                                        <input type="hidden" name="id" class="form-control">
                                        <input type="text" name="platform" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kontak</label>
                                        <input type="text" name="kontak" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" name="link" class="form-control">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Ikon Platform</label>
                                        <input type="file" name="icon" class="form-control">
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