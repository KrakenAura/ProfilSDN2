 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($sosial_media as $data_sosmed) { ?>
             <?php echo form_open_multipart('index.php/ContactController/update'); ?>
             <div class="form-group">
                 <label>Platform</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_sosmed->id ?>">
                 <input type="text" name="platform" class="form-control" value="<?php echo $data_sosmed->platform ?>">
             </div>
             <div class="form-group">
                 <label>Kontak</label>
                 <input type="text" name="kontak" class="form-control" value="<?php echo $data_sosmed->kontak ?>">
             </div>
             <div class="form-group">
                 <label>Link</label>
                 <input type="text" name="link" class="form-control" value="<?php echo $data_sosmed->link ?>">
             </div>
             <div class="form-group mb-4">
                 <label>Ikon Platform</label>
                 <input type="file" name="icon" class="form-control" value="<?php echo $data_sosmed->icon ?>">
             </div>

             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>

         <?php  } ?>

     </section>

 </div>