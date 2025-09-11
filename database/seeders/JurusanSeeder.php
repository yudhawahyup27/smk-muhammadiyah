<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Teknik Komputer dan Jaringan',
                'gambar' => 'https://i.ibb.co/0jTYjN6/tkj.png',
                'deskripsi' => 'Jurusan yang mempelajari jaringan komputer, hardware, dan troubleshooting.',
            ],
            [
                'nama' => 'Rekayasa Perangkat Lunak',
                'gambar' => 'https://i.ibb.co/nwkRw06/rpl.png',
                'deskripsi' => 'Jurusan fokus pada pemrograman, pembuatan aplikasi, dan rekayasa sistem lunak.',
            ],
            [
                'nama' => 'Multimedia',
                'gambar' => 'https://i.ibb.co/zH6vJFn/mm.png',
                'deskripsi' => 'Mempelajari desain grafis, video editing, animasi, dan teknologi kreatif.',
            ],
            [
                'nama' => 'Teknik Kendaraan Ringan',
                'gambar' => 'https://i.ibb.co/mzvSPzb/tkr.png',
                'deskripsi' => 'Bidang otomotif yang mempelajari mesin kendaraan, sistem kelistrikan, dan perawatan mobil.',
            ],
            [
                'nama' => 'Teknik dan Bisnis Sepeda Motor',
                'gambar' => 'https://i.ibb.co/qMBGxrc/tbsm.png',
                'deskripsi' => 'Mempelajari teknologi sepeda motor serta manajemen bisnis dan layanan purna jual.',
            ],
        ];

        foreach ($data as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
