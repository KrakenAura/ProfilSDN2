 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($sambutan as $data_sambutan) { ?>
             <!-- <form action="<?php echo base_url() . 'index.php/SambutanController/update'; ?>" method="post"> -->
             <?php echo form_open_multipart('index.php/SambutanController/update'); ?>
             <div class="form-group">
                 <label>Nama Kepala Sekolah</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_sambutan->id ?>">
                 <input type="text" name="nama_kepsek" class="form-control" value="<?php echo $data_sambutan->nama_kepsek ?>">
             </div>
             <div class="form-group">
                 <label>Foto Kepala Sekolah</label>
                 <input type="file" name="foto" class="form-control" value="<?php echo $data_sambutan->foto ?>">
             </div>
             <div class="form-group">
                 <label>Sambutan</label>
                 <input type="text" name="sambutan" class="form-control" value="<?php echo $data_sambutan->sambutan ?>">
             </div>

             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>

         <?php  } ?>

     </section>

 </div>