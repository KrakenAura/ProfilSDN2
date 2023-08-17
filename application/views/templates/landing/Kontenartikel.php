<header class="masthead" style="background-image: url('<?= base_url('/assets/Home/') ?>img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About Us</h1>
                            <span class="subheading">Halo</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!DOCTYPE html>
<html lang="en">
  <style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <title>Web Sekolah SD</title>
  <style>
    /* Gaya CSS Anda di sini */
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <!-- Daftar artikel -->
      <div class="col-md-6">
        <div class="article">
          <h2><a href="#" class="article-link" data-id="1">Berita Terbaru</a></h2>
          <p>Informasi tentang acara lomba menulis yang berhasil dimenangkan oleh siswa-siswi sekolah kami. Selamat kepada para pemenang!</p>
        </div>
      </div>
      <!-- Tambahkan artikel lainnya di sini -->
    </div>
  </div>

  <div class="modal" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="articleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="articleContent">
        </div>
      </div>
    </div>
  </div>

  <script>
    const articleLinks = document.querySelectorAll('.article-link');

    articleLinks.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const articleId = this.getAttribute('data-id');
        const articleTitle = this.textContent;
        const articleContent = "Konten artikel #" + articleId; // Ganti ini dengan konten artikel yang sesuai

        const modalTitle = document.getElementById('articleModalLabel');
        const modalContent = document.getElementById('articleContent');

        modalTitle.textContent = articleTitle;
        modalContent.textContent = articleContent;

        const articleModal = new bootstrap.Modal(document.getElementById('articleModal'));
        articleModal.show();
      });
    });
  </script>
</body>
</html>
