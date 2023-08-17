 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($kegiatan_rutin as $data_kegiatan) { ?>
             <?php echo form_open_multipart('index.php/KegiatanRutinController/update'); ?>
             <div class="form-group">
                 <label>Nama Kegiatan</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_kegiatan->id ?>">
                 <input type="text" name="judul_kegiatan" class="form-control" value="<?php echo $data_kegiatan->judul_kegiatan ?>">
             </div>
             <div class="form-group">
                 <label>Deskripsi Singkat</label>
                 <input type="text" name="deskripsi_singkat" class="form-control" value="<?php echo $data_kegiatan->deskripsi_singkat ?>">
             </div>
             <div class="form-group">
                 <label>Singkat</label>
                 <input type="text" name="deskripsi" class="form-control" value="<?php echo $data_kegiatan->deskripsi ?>">
             </div>
             <div class="form-group">
                 <label>Jadwal</label>
                 <input type="text" name="jadwal" class="form-control" value="<?php echo $data_kegiatan->jadwal ?>">
             </div>
             <div class="form-group mb-4">
                 <label>Foto Kegiatan</label>
                 <input type="file" name="foto" class="form-control" value="<?php echo $data_kegiatan->foto ?>">
             </div>
             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>

         <?php  } ?>

     </section>

 </div>