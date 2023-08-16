 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($visi as $data_visi) { ?>
             <?php echo form_open_multipart('index.php/TentangKamiController/update/visi'); ?>
             <div class="form-group">
                 <label>Visi Sekolah</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_visi->id ?>">
                 <input type="text" name="visi" class="form-control" value="<?php echo $data_visi->visi ?>">
             </div>
             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <?php echo form_close(); ?>
         <?php } ?>
     </section>

 </div>