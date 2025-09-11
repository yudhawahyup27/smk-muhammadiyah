<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekstra;

class EkstraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Pramuka',
                'gambar' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiP6D1l1s6-17nfYojPVww2I4v-yG9iNSI9yW8HtK7HetnmxVBiuuf9-5Vk73ICQZqCYRmJU-Iy37e4VVg1LvOxVoakR2WR7XLaEN4PTt-Z1p5P3g0NfLVm5wjTd9jIkhuXh12Vf47vWp33/s1600/ilustrasi-pramuka.jpg',
                'jadwal' => 'Jumat, 15:00 - 17:00',
                'deskripsi' => 'Kegiatan kepramukaan yang melatih kedisiplinan, tanggung jawab, dan keterampilan alam terbuka.',
            ],
            [
                'nama' => 'Paskibra',
                'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Paskibraka_Kabupaten_Tangerang_2015.jpg/1200px-Paskibraka_Kabupaten_Tangerang_2015.jpg',
                'jadwal' => 'Sabtu, 07:00 - 09:00',
                'deskripsi' => 'Pasukan Pengibar Bendera dengan latihan baris-berbaris dan pembentukan karakter.',
            ],
            [
                'nama' => 'Rohis',
                'gambar' => 'https://smkn6solo.sch.id/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-28-at-13.17.13-1024x768.jpeg',
                'jadwal' => 'Senin, 13:00 - 14:30',
                'deskripsi' => 'Rohani Islam yang membina spiritualitas dan nilai-nilai keagamaan siswa.',
            ],
        ];

        foreach ($data as $ekstra) {
            Ekstra::create($ekstra);
        }
    }
}
