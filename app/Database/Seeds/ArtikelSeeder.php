<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArtikelSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'judul_artikel' => 'Sejarah Kerajaan Cirebon',
        'isi_artikel'    => 'Kesultanan Cirebon merupakan bagian dari kekuasaan Kerajaan Pajajaran. Prabu Siliwangi menugaskan putranya bernama Pangeran Walangsungsang menjadi adipati di Cirebon. Saat Pemerintahan Cirebon kuat, Pangeran Walangsungsang tak mau membayat upeti sehingga raja Pajajaranpun akhirnya marah dan mengirimkan tentaranya untuk menyerang Pangeran Walangsungsang. Namun, tentara Kerajaan Pajajaran berhasil dikalahkan oleh Pangeran Walangsungsang. Akhirnya Walangsungsang mendirikan Kerajaan Cirebon.',
        'tgl_artikel'    => '2021-04-07',
        'gambar_artikel'    => 'gambar1.jpg'
      ],
      [
        'judul_artikel' => 'Sejarah Batik Trusmi',
        'isi_artikel'    => 'PT. Batik Trusmi adalah salah satu sentra batik terbesar yang ada di Indonesia. Showroom Trusmi memiliki ragam jenis batik yang sesuai dengan selera pasar saat ini, bukan hanya dari warna batik maupun warna dasar kain, namun siluet baju yang ditawarkan pada showroom batik ini juga mengikuti trend yang sedang berkembang sehingga dapat menyesuaikan kebutuhanmu.
        Kualitas Trusmi sudah tidak perlu diragukan lagi. Dengan perusahaan yang telah berdiri semenjak puluhan tahun ini, kualitas dari setiap kain batik dan pakaian yang diproduksi memiliki kualitas yang terjamin.
        Baju yang dijual pada tempat ini sudah melalui 5 tahapan quality control sehingga keawetan dari batik yang telah melegenda ini terjamin bila dilakukan perawatan dengan tepat.
        ',
        'tgl_artikel'    => '2021-06-01',
        'gambar_artikel'    => 'gambar2.jpg'
      ],
      [
        'judul_artikel' => 'Sejarah Kota Cirebon',
        'isi_artikel'    => 'Berdasarkan catatan sejarah dalam naskah Babad Tanah Sunda dan Carita Purwaka Caruban Nagari, Cirebon mulanya adalah sebuah dukuh kecil yang didirikan oleh Ki Ageng Tapa. Perlahan-lahan, dukuh ini berkembang menjadi semakin ramai dan akhirnya bernama Caruban, yang dalam bahasa Sunda berarti ‘campuran’. Nama tersebut mewakili bermacam suku bangsa, bahasa, adat, agama, latar belakang, dan mata pencaharian dari masyarakat yang mendiaminya. Banyak yang datang karena berdagang maupun ingin menetap di sana.
        ',
        'tgl_artikel'    => '2021-05-02',
        'gambar_artikel'    => 'gambar3.jpg'
      ]
    ];

    // Simple Queries
    // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

    // Using Query Builder
    $this->db->table('artikel')->insertBatch($data);
  }
}
