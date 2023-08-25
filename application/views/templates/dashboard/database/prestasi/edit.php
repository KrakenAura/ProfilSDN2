 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($prestasi as $data_prestasi) { ?>
             <?php echo form_open_multipart('index.php/PrestasiController/update'); ?>
             <div class="form-group">
                 <label>Nama Prestasi</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_prestasi->id ?>">
                 <input type="text" name="nama" class="form-control" value="<?php echo $data_prestasi->nama ?>">
             </div>
             <div class="form-group">
                 <label>Tingkat</label>
                 <input type="text" name="tingkat" class="form-control" value="<?php echo $data_prestasi->tingkat ?>">
             </div>
             <div class="form-group">
                 <label>Tahun</label>
                 <input type="text" name="tahun" class="form-control" value="<?php echo $data_prestasi->tahun ?>">
             </div>
             <div class="form-group">
                 <label>Jenis</label>
                 <input type="text" name="jenis" class="form-control" value="<?php echo $data_prestasi->jenis ?>">
             </div>
             <div class="form-group">
                 <label>Deskripsi</label>
                 <input type="text" name="deskripsi" class="form-control" value="<?php echo $data_prestasi->deskripsi ?>">
             </div>

             <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>

         <?php  } ?>
     </section>
 </div>