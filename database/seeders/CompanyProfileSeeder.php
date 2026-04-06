<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyProfile;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::create([
            'name' => 'SainTech',
            'description' => 'Saint Technology adalah perusahaan inovatif yang bergerak di bidang teknologi informasi dan solusi digital. Didirikan dengan visi untuk menghadirkan transformasi digital yang cerdas dan efisien, Saint Technology berfokus pada pengembangan perangkat lunak, sistem integrasi, dan layanan konsultasi IT yang disesuaikan dengan kebutuhan bisnis modern.',
            'address' => 'Tangerang',
            'phone' => '087935463274',
            'email' => 'saintechnology@gmail.com',
            'image' => '',
        ]);
    }
}
