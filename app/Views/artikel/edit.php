<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="header">
            <h4 class="title">Form Ubah Artikel</h4>
          </div>
          <div class="content">
            <form action="/artikel/update/<?= $artikel['id_artikel']; ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_artikel" id="id_artikel" value="<?= $artikel['id_artikel']; ?>">
              <input type="hidden" name="gambarArtikelLama" value="<?= $artikel['gambar_artikel']; ?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Judul Artikel</label>
                    <input id="judul_artikel" name="judul_artikel" for="judul_artikel" type="text" class="form-control" placeholder="Masukan Judul Artikel" required value="<?= $artikel['judul_artikel']; ?>" autofocus>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Isi Artikel</label>
                    <textarea id="isi_artikel" name="isi_artikel" for="isi_artikel" rows="5" class="form-control" placeholder="Masukan Isi Artikel " required><?= $artikel['isi_artikel']; ?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tanggal Diupload</label>
                      <input id="tgl_artikel" name="tgl_artikel" for="tgl_artikel" type="date" class="form-control" placeholder="Masukan Tanggal Diupload" required value="<?= $artikel['tgl_artikel']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Gambar Artikel</label>
                      <input id="gambar_artikel" name="gambar_artikel" for="gambar_artikel" type="file" class="form-control" placeholder="Masukan Gambar Artikel" value="<?= $artikel['gambar_artikel']; ?>">
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-success btn-fill pull-right">Ubah Data</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>