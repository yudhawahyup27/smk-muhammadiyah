<?php

namespace Database\Factories;

use App\Models\alumni;
use App\Models\jurusan;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumniFactory extends Factory
{
    protected $model = alumni::class;

    public function definition(): array
    {
       $status = $this->faker->randomElement(['bekerja', 'kuliah']);
        $tahunLulus = $this->faker->numberBetween(2010, date('Y'));
        $angkatan = $this->faker->numberBetween(2000, $tahunLulus);
        $companies = [
    "PT Pertamina (Persero)",
    "PT Perusahaan Listrik Negara (Persero) atau PLN",
    "PT Astra International Tbk",
    "PT Bank Rakyat Indonesia (Persero) Tbk (BRI)",
    "PT Bank Mandiri (Persero) Tbk",
    "PT Telkom Indonesia (Persero) Tbk",
    "PT Gudang Garam Tbk",
    "PT Hanjaya Mandala Sampoerna Tbk",
    "PT Bank Central Asia Tbk (BCA)",
    "PT Indofood Sukses Makmur Tbk",
    "PT Mining Industry Indonesia (MIND ID)",
    "PT Sumber Alfaria Trijaya Tbk (Alfamart)",
    "PT Adaro Energy Indonesia Tbk",
    "PT Bank Negara Indonesia (Persero) Tbk (BNI)",
    "PT Pupuk Indonesia (Persero)",
    "PT Dian Swastatika Sentosa Tbk",
    "PT Sinar Mas Agro Resources & Technology Tbk",
    "PT Charoen Pokphand Indonesia Tbk",
    "PT Erajaya Swasembada Tbk",
    "PT Bayan Resources Tbk",
    "PT Indah Kiat Pulp & Paper Tbk",
    "PT Indosat Ooredoo Hutchison Tbk",
    "PT Japfa Comfeed Indonesia Tbk",
    "PT Indika Energy Tbk",
    "PT Garuda Indonesia (Persero) Tbk",
    "PT Semen Indonesia (Persero) Tbk (SIG Group)",
    "PT Unilever Indonesia Tbk",
    "PT Baramulti Suksessarana Tbk",
    "PT Sumber Global Energy Tbk",
    "PT Prima Andalan Mandiri Tbk",
    "PT Jasa Marga (Persero) Tbk",
    "PT Bank Mega Tbk",
    "PT Indocement Tunggal Prakarsa Tbk",
    "PT Hero Supermarket Tbk",
    "PT Kalbe Farma Tbk",
    "PT Kereta Api Indonesia (Persero) (KAI)",
    "PT Pelabuhan Indonesia (Persero) (Pelindo)",
    "PT Angkasa Pura I (Persero)",
    "PT Pos Indonesia (Persero)",
    "PT Krakatau Steel (Persero) Tbk",
    "PT Pindad (Persero)",
    "PT Dahana (Persero)",
    "PT Dirgantara Indonesia (Persero)",
    "PT PAL Indonesia (Persero)",
    "PT Waskita Karya (Persero) Tbk",
    "PT Pembangunan Perumahan (Persero) Tbk (PT PP)",
    "PT Wijaya Karya (Persero) Tbk (WIKA)",
    "PT Adhi Karya (Persero) Tbk",
    "PT Brantas Abipraya (Persero) Tbk",
    "Perum Bulog",
    "PT Perkebunan Nusantara (PTPN) Group",
    "PT Sarinah",
    "PT Telekomunikasi Seluler (Telkomsel)",
    "PT MNC Investama Tbk",
    "PT Bank OCBC NISP Tbk",
    "PT Bank Pembangunan Daerah Jawa Barat dan Banten (Bank BJB)",
    "PT Metrodata Electronics Tbk",
    "PT Gajah Tunggal Tbk",
    "PT Catur Sentosa Adiprana Tbk",
    "PT Mayora Indah Tbk",
    "PT Amman Mineral International Tbk",
    "PT XL Axiata Tbk",
    "PT Global Digital Niaga Tbk (Blibli)",
    "PT Lippo Karawaci Tbk",
    "PT Gunung Raja Paksi Tbk",
    "PT Fajar Surya Wisesa Tbk",
    "PT Multipolar Tbk",
    "PT PAN Brothers Tbk",
    "PT Garudafood Putra Putri Jaya Tbk",
];
$photos = [
    'https://randomuser.me/api/portraits/men/10.jpg',
    'https://randomuser.me/api/portraits/men/20.jpg',
    'https://randomuser.me/api/portraits/men/30.jpg',
    'https://randomuser.me/api/portraits/men/40.jpg',
    'https://randomuser.me/api/portraits/men/50.jpg',
    'https://randomuser.me/api/portraits/women/10.jpg',
    'https://randomuser.me/api/portraits/women/20.jpg',
    'https://randomuser.me/api/portraits/women/30.jpg',
    'https://randomuser.me/api/portraits/women/40.jpg',
    'https://randomuser.me/api/portraits/women/50.jpg',
    'https://i.pravatar.cc/150?img=1',
    'https://i.pravatar.cc/150?img=2',
    'https://i.pravatar.cc/150?img=3',
    'https://i.pravatar.cc/150?img=4',
    'https://i.pravatar.cc/150?img=5',
    'https://i.pravatar.cc/150?img=6',
    'https://i.pravatar.cc/150?img=7',
    'https://i.pravatar.cc/150?img=8',
    'https://i.pravatar.cc/150?img=9',
    'https://i.pravatar.cc/150?img=10',
];


        $jurusanId = jurusan::inRandomOrder()->first()?->id ?? jurusan::factory()->create()->id;

        return [
            'name' => $this->faker->name(),
            'photo' =>  $this->faker->randomElement($photos),
            'tahun_lulus' => $tahunLulus,
            'angkatan' => $angkatan,
            'status' => $status,
            'tempat' => ($status === 'bekerja')
                ? $this->faker->randomElement($companies)
                : $this->faker->randomElement([
                    'Universitas Indonesia',
                    'Universitas Gadjah Mada',
                    'Institut Teknologi Bandung',
                    'Politeknik Negeri Malang',
                    'Universitas Terbuka',
                    'Universitas Brawijaya',
                    'Universitas Padjadjaran'
                ]),
            'jurusan_id' => $jurusanId,
            'caption' => $this->faker->boolean(50) ? $this->faker->paragraph(2) : null,
        ];
    }
}
