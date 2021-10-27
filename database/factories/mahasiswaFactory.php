<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class mahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'fakultas_id' => rand(1,2),
            'program_studis_id' => rand(1,2),
            'telp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->streetAddress()
        ];
    }
}
