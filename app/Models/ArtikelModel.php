<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
  protected $table = 'artikel';
  protected $primaryKey = 'id_artikel';
  protected $allowedFields = ['judul_artikel', 'isi_artikel', 'tgl_artikel', 'gambar_artikel'];

  public function getArtikel($artikel = false)
  {

    if ($artikel == false) {
      return $this->findAll();
    }

    return $this->where(['id_artikel' => $artikel])->first();
  }
}
