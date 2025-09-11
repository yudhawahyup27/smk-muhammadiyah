<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fasilitas;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Laboratorium Komputer',
                'gambar' => 'https://i.ibb.co/tCwKhT5/lab-komputer.jpg',
                'deskripsi' => 'Dilengkapi dengan komputer modern untuk kegiatan pembelajaran TIK dan pemrograman.',
            ],
            [
                'nama' => 'Ruang Multimedia',
                'gambar' => 'https://i.ibb.co/LkR1scm/ruang-multimedia.jpg',
                'deskripsi' => 'Digunakan untuk presentasi dan pembelajaran berbasis audio visual.',
            ],
            [
                'nama' => 'Bengkel Otomotif',
                'gambar' => 'https://i.ibb.co/3Nty3nw/bengkel-otomotif.jpg',
                'deskripsi' => 'Tempat praktik siswa jurusan TKR dan TBSM dengan peralatan otomotif lengkap.',
            ],
            [
                'nama' => 'Perpustakaan Digital',
                'gambar' => 'https://i.ibb.co/9y6THqd/perpustakaan.jpg',
                'deskripsi' => 'Menyediakan koleksi buku cetak dan e-book untuk menunjang literasi siswa.',
            ],
            [
                'nama' => 'Lapangan Olahraga',
                'gambar' => 'https://i.ibb.co/gR8rKxR/lapangan.jpg',
                'deskripsi' => 'Fasilitas olahraga untuk kegiatan jasmani dan ekstrakurikuler seperti futsal dan basket.',
            ],
        ];

        foreach ($data as $item) {
            Fasilitas::create($item);
        }
    }
}
