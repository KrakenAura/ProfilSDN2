 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($profil_sekolah as $data_profil) { ?>
             <!-- <form action="<?php echo base_url() . 'SambutanController/update'; ?>" method="post"> -->
             <?php echo form_open_multipart('TentangKamiController/updateProfil'); ?>
             <div class="form-group">
                 <label>Foto Sekolah</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_profil->id ?>">
                 <input type="file" name="foto" class="form-control" value="<?php echo $data_profil->foto ?>">
             </div>
             <div class="form-group">
                 <label>Deskripsi</label>
                 <input type="text" name="deskripsi" class="form-control" value="<?php echo $data_profil->deskripsi ?>">
             </div>

             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>

         <?php  } ?>

     </section>

 </div>