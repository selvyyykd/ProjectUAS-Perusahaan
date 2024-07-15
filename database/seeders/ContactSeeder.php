<?php

namespace Database\Seeders;

use App\Models\Contact;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory()->create([
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
