<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col">
      <div class="card mb-3" style="max-width: 2000px;">
        <div class="row g-0">
          <div class="col-md-4" style="margin-top: 10px; margin-bottom: 10px;">
            <img style="width: 380px;" src="/img/<?= $artikel['gambar_artikel']; ?>" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="margin-bottom: 10px; ">
              <h3 class="card-title"> <?= $artikel['judul_artikel']; ?></h3>
              <p class="card-text" style="text-align: justify; margin-right: 8px;"><?= $artikel['isi_artikel']; ?></p>
              <p class="card-text"><small class="text-muted">Last updated <?= $artikel['tgl_artikel']; ?></small></p>

              <a href="/artikel/edit/<?= $artikel['id_artikel']; ?>" class="btn btn-success btn-fill ">Update</a>

              <form action="/artikel/<?= $artikel['id_artikel']; ?>" method="POST" style="display: inline;">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-success btn-fill" onclick="return confirm('apakah anda yakin?');">Delete</button>
              </form>

              <a href="/artikel" class="btn">kembali ke daftar artikel </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>