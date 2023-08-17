 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($ekstrakulikuler as $data_ekstrakulikuler) { ?>
             <?php echo form_open_multipart('index.php/EkstrakulikulerController/update'); ?>
             <div class="form-group">
                 <label>Nama Ekstrakulikuler</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_ekstrakulikuler->id ?>">
                 <input type="text" name="nama" class="form-control" value="<?php echo $data_ekstrakulikuler->nama ?>">
             </div>
             <div class="form-group">
                 <label>Deskripsi</label>
                 <input type="text" name="deskripsi" class="form-control" value="<?php echo $data_ekstrakulikuler->deskripsi ?>">
             </div>
             <div class="form-group">
                 <label>Manfaat</label>
                 <input type="text" name="manfaat" class="form-control" value="<?php echo $data_ekstrakulikuler->manfaat ?>">
             </div>
             <div class="form-group">
                 <label>Jadwal</label>
                 <input type="text" name="jadwal" class="form-control" value="<?php echo $data_ekstrakulikuler->jadwal ?>">
             </div>
             <div class="form-group mb-4">
                 <label>Foto Kegiatan</label>
                 <input type="file" name="foto" class="form-control" value="<?php echo $data_ekstrakulikuler->foto ?>">
             </div>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>


         <?php  } ?>

     </section>

 </div>