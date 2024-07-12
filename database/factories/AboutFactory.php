<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Company',
            'description' => 'lorem ipsum',
            'logo' => 'logo.png',
            'alamat' => 'Jl. Mawar No.52',
            'email' => 'selvykirana66@gmail.com',
            'telepon' => '083822623170',
            'maps_embed' => 'maps.com',
        ];
    }
}
