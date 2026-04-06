<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'profile' => 'Tentang Kami',
            'description' => 'Kami adalah perusahaan yang bergerak di bidang distribusi dan penyediaan produk berkualitas untuk kebutuhan industri dan bisnis.',
            'vision' => 'Menjadi perusahaan terpercaya dan terdepan di Indonesia.',
            'mission' => 'Memberikan pelayanan terbaik, produk berkualitas, dan solusi inovatif bagi pelanggan.',
            'values' => 'Integritas, Profesionalisme, Komitmen, Kepuasan Pelanggan',
            'image' => 'about.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
