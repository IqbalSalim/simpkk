<?php

namespace Database\Factories;

use App\Models\Warta;
use Illuminate\Database\Eloquent\Factories\Factory;

class WartaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Warta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->text(50),
            'isi' => $this->faker->text(1000),
            'penulis' => $this->faker->name(),
            'gambar' => $this->faker->imageUrl('https://source.unsplash.com/random'),
        ];
    }
}
