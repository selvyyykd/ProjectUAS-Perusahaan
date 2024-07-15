<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'judul' => 'Company',
            'subjudul' => 'lorem ipsum',
            'deskripsi_1' => 'Logo.png',
            'deskripsi_2' => 'Lorem Ipsum',
            'kelebihan_1' => 'Lorem Ipsum',
            'kelebihan_2' => 'Lorem Ipsum',
            'kelebihan_3' => 'Lorem Ipsum',
            'kelebihan_4' => 'Lorem Ipsum',
        ]);
    }
}
