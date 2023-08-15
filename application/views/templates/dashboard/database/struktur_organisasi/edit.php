 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($struktur_organisasi as $data_struktur) { ?>
             <?php echo form_open_multipart('index.php/StrukturOrganisasiController/update'); ?>
             <div class="form-group">
                 <label>Nama Guru</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_struktur->id ?>">
                 <input type="text" name="nama" class="form-control" value="<?php echo $data_struktur->nama ?>">
             </div>
             <div class="form-group">
                 <label>Nomor Identitas Pegawai Negeri Sipil</label>
                 <input type="text" name="nip" class="form-control" value="<?php echo $data_struktur->nip ?>">
             </div>
             <div class="form-group">
                 <label>Jabatan</label>
                 <input type="text" name="jabatan" class="form-control" value="<?php echo $data_struktur->jabatan ?>">
             </div>
             <div class="form-group">
                 <label>Status</label>
                 <input type="text" name="status" class="form-control" value="<?php echo $data_struktur->status ?>">
             </div>
             <div class="form-group">
                 <label>Mata Pelajaran</label>
                 <input type="text" name="mata_pelajaran" class="form-control" value="<?php echo $data_struktur->mata_pelajaran ?>">
             </div>
             <div class="form-group">
                 <label>Jenis Kelamin</label>
                 <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $data_struktur->jenis_kelamin ?>">
             </div>
             <div class="form-group">
                 <label>Email</label>
                 <input type="text" name="email" class="form-control" value="<?php echo $data_struktur->email ?>">
             </div>

             <div class="form-group mb-4">
                 <label>Foto Guru</label>
                 <input type="file" name="foto" class="form-control" value="<?php echo $data_struktur->foto ?>">
             </div>

             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>

         <?php  } ?>

     </section>

 </div>