 <div class="content-wrapper">
     <section class="content">
         <?php foreach ($artikel as $data_artikel) { ?>
             <?php echo form_open_multipart('ArtikelController/update'); ?>
             <div class="form-group">
                 <label>Judul Artikel</label>
                 <input type="hidden" name="id" class="form-control" value="<?php echo $data_artikel->id ?>">
                 <input type="text" name="judul" class="form-control" value="<?php echo $data_artikel->judul ?>">
             </div>
             <div class="form-group">
                 <label>Penulis</label>
                 <input type="text" name="penulis" class="form-control" value="<?php echo $data_artikel->penulis ?>">
             </div>
             <div class="form-group">
                 <label>Tanggal</label>
                 <input type="text" name="tanggal" class="form-control" value="<?php echo $data_artikel->tanggal ?>">
             </div>
             <div class="form-group">
                 <label>Isi</label>
                 <textarea name="isi" class="form-control" rows="5" cols="50"><?php echo htmlspecialchars($data_artikel->isi); ?></textarea>
             </div>

             <div class="form-group mb-4">
                 <label>Jenis</label>
                 <select name="jenis" class="form-control">
                     <option value="Berita" <?php if ($data_artikel->jenis === 'Berita') echo 'selected'; ?>>Berita</option>
                     <option value="Informasi" <?php if ($data_artikel->jenis === 'Informasi') echo 'selected'; ?>>Informasi</option>
                 </select>
             </div>

             <div class="form-group mb-4">
                 <label>Foto</label>
                 <input type="file" name="foto" class="form-control" value="<?php echo $data_artikel->foto ?>">
             </div>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <!-- </form> -->
             <?php echo form_close(); ?>
         <?php  } ?>

     </section>

 </div>