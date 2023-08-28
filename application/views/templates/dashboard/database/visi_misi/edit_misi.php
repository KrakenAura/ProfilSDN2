 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($misi as $data_misi) { ?>
             <?php echo form_open_multipart('TentangKamiController/update/misi'); ?>
             <div class="form-group">
                 <label>misi Sekolah</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_misi->id ?>">
                 <input type="text" name="misi" class="form-control" value="<?php echo $data_misi->misi ?>">
             </div>
             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <?php echo form_close(); ?>
         <?php } ?>
     </section>

 </div>