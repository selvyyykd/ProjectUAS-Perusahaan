<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->sentence,
            'logo' => 'default_logo.jpg', // example, adjust as needed
            'alamat' => $this->faker->address,
            'email' => $this->faker->safeEmail,
            'telepon' => $this->faker->phoneNumber,
            'maps_embed' => '<iframe src="https://maps.google.com/maps?q=latitude,longitude&z=15&output=embed"></iframe>', // adjust with real embed code
        ];
    }
}
