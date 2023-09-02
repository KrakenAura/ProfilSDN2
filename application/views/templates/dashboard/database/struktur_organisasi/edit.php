 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($struktur_organisasi as $data_struktur) { ?>
             <?php echo form_open_multipart('StrukturOrganisasiController/update'); ?>
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