 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($hero as $data_hero) { ?>
             <?php echo form_open_multipart('index.php/DashboardController/update_hero'); ?>
             <h5><strong>Data</strong>Wallpaper <?php echo $data_hero->halaman ?></h5>
             <input type="hidden" name="id" class="form-control" value="<?php echo $data_hero->id ?>">
             <input type="hidden" name="halaman" class="form-control" value="<?php echo $data_hero->halaman ?>">
             <div class="form-group">
                 <label>judul</label>
                 <input type="text" name="judul" class="form-control" value="<?php echo $data_hero->judul ?>">
             </div>
             <div class="form-group">
                 <label>sub_judul</label>
                 <input type="text" name="sub_judul" class="form-control" value="<?php echo $data_hero->sub_judul ?>">
             </div>
             <div class="form-group mb-4">
                 <label>Foto</label>
                 <input type="file" name="foto" class="form-control" value="<?php echo $data_hero->foto ?>">
             </div>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>


         <?php  } ?>

     </section>

 </div>