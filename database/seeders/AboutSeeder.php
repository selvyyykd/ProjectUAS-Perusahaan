<?php

namespace Database\Seeders;

use App\Models\About;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::factory()->create([
            'name' => 'Company',
            'description' => 'lorem ipsum',
            'logo' => 'logo.png',
            'alamat' => 'Jl. Mawar No.52',
            'email' => 'selvykirana66@gmail.com',
            'telepon' => '083822623170',
            'maps_embed' => 'maps.com',
        ]);
    }
}
