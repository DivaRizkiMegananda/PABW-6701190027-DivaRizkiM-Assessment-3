<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Daftar Artikel</h4>
            <p class="category">Menampilkan semua data artikel</p>
            <?php if (session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>No</th>
                <th>Judul Artikel</th>
                <th>Gambar</th>
                <th>Tanggal diupload</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($artikel as $a) : ?>
                  <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $a['judul_artikel']; ?></td>
                    <td><img src="/img/<?= $a['gambar_artikel']; ?>" alt="" class="gambar"></td>
                    <td><?= $a['tgl_artikel']; ?></td>
                    <td><a href="/artikel/<?= $a['id_artikel']; ?>" class="btn btn-success">Detail</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <a class="btn btn-success btn-fill pull-right" style="margin-bottom: 50px;" href="/Artikel/create">Tambah Data Artikel</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>