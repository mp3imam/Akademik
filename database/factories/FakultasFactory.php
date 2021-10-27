<?php

namespace Database\Factories;

use App\Models\fakultas;
use Illuminate\Database\Eloquent\Factories\Factory;

class FakultasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = fakultas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name()
        ];
    }
}
