<?php

// database/seeders/AlumniSeeder.php

namespace Database\Seeders;

use App\Models\alumni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh membuat 50 data alumni dummy
        Alumni::factory()->count(28)->create();
    }
}
