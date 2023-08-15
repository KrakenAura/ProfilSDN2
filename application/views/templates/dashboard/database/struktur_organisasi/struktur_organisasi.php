            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Data</strong> Struktur Organisasi</h1>

                    <!--Section Table -->
                    <section class="content">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Mata Pelajaran</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Foto</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($struktur_organisasi as $data_struktur) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data_struktur->nama ?></td>
                                    <td><?php echo $data_struktur->nip ?></td>
                                    <td><?php echo $data_struktur->jabatan ?></td>
                                    <td><?php echo $data_struktur->status ?></td>
                                    <td><?php echo $data_struktur->mata_pelajaran ?></td>
                                    <td><?php echo $data_struktur->jenis_kelamin ?></td>
                                    <td><?php echo $data_struktur->email ?></td>

                                    <td><img src="<?= base_url('assets/Resource/struktur_organisasi/') ?><?php echo $data_struktur->foto; ?>" class="img-fluid" style="max-width: 50%;"> </td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/SambutanController/edit/' . $data_struktur->id,
                                            '<div class="btn btn-danger btn-sm"><i class="align-middle me-2" data-feather="delete"></i>Hapus</div>'
                                        ) ?>
                                    </td>
                                    <td>
                                        <?php echo anchor(
                                            '/index.php/SambutanController/edit/' . $data_struktur->id,
                                            '<div class="btn btn-primary btn-sm"><i class="align-middle me-2" data-feather="edit"></i>Edit</div>'
                                        ) ?>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </table>
                    </section>
                    <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#profileModal">Tambah Data</button>
                    <!-- Modal -->
                    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="profileModalLabel">Tambah Data Guru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- <form method="post" action="<?php echo base_url() . 'index.php/StrukturOrganisasiController/tambah' ?>"> -->
                                    <?php echo form_open_multipart('index.php/StrukturOrganisasiController/tambah'); ?>
                                    <div class="form-group">
                                        <label>Nama Guru</label>
                                        <input type="hidden" name="id" class="form-control">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Identitas Pegawai Negeri Sipil</label>
                                        <input type="text" name="nip" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mata Pelajaran</label>
                                        <input type="text" name="mata_pelajaran" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label>Foto Guru</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>