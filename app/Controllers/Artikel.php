<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
  protected $artikelModel;
  public function __construct()
  {
    $this->artikelModel = new ArtikelModel();
  }

  public function home()
  {

    $artikel = $this->artikelModel->findAll();

    $data = [

      'title' => 'Daftar Artikel',
      'subTitle' => 'Artikel',
      'artikel' => $artikel
    ];

    return view('tampil/index', $data);
  }
  public function index()
  {

    $artikel = $this->artikelModel->findAll();

    $data = [

      'title' => 'Daftar Artikel',
      'subTitle' => 'Artikel',
      'artikel' => $artikel
    ];

    return view('artikel/index', $data);
  }

  public function detailArtikel($id_artikel)
  {

    $data = [
      'title' => 'Detail Artikel',
      'subTitle' => 'Artikel',
      'artikel' => $this->artikelModel->getArtikel($id_artikel)
    ];
    return view('artikel/detailArtikel', $data);
  }

  public function create()
  {

    $data = [
      'title' => 'Form Tambah Artikel',
      'subTitle' => 'Artikel'
    ];

    return view('artikel/create', $data);
  }

  public function save()
  {

    // ambil gambar

    $fileGambarArtikel = $this->request->getFile('gambar_artikel');

    // pindahkan ke folder img

    $fileGambarArtikel->move('img');

    // ambil nama file gambar artikel

    $namaFileGambarArtikel = $fileGambarArtikel->getName();


    $this->artikelModel->save([

      'judul_artikel' => $this->request->getVar('judul_artikel'),
      'isi_artikel' => $this->request->getVar('isi_artikel'),
      'tgl_artikel' => $this->request->getVar('tgl_artikel'),
      'gambar_artikel' => $namaFileGambarArtikel
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/artikel');
  }

  public function delete($id_artikel)
  {

    $this->artikelModel->delete($id_artikel);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');

    return redirect()->to('/artikel');
  }

  public function edit($id_artikel)
  {

    $data = [
      'title' => 'Form Ubah Artikel',
      'subTitle' => 'Artikel',
      'artikel' => $this->artikelModel->getArtikel($id_artikel)
    ];

    return view('artikel/edit', $data);
  }


  public function update($id_artikel)
  {

    $fileGambarArtikel = $this->request->getFile('gambar_artikel');

    // cek gambar, apakah tetap gambar lama

    if ($fileGambarArtikel->getError() == 4) {
      $namaGambarArtikel = $this->request->getVar('gambarArtikelLama');
    } else {

      // generate nama file random

      $namaGambarArtikel = $fileGambarArtikel->getRandomName();

      // pindahkan gambar 

      $fileGambarArtikel->move('img', $namaGambarArtikel);
    }


    $this->artikelModel->save([
      'id_artikel' => $id_artikel,
      'judul_artikel' => $this->request->getVar('judul_artikel'),
      'isi_artikel' => $this->request->getVar('isi_artikel'),
      'tgl_artikel' => $this->request->getVar('tgl_artikel'),
      'gambar_artikel' => $namaGambarArtikel
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah.');

    return redirect()->to('/artikel');
  }
}
