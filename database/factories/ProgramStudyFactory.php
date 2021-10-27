<?php

namespace Database\Factories;

use App\Models\programStudy;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramStudyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = programStudy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fakultas_id' => rand(1,2),
            'nama' => $this->faker->name()
        ];
    }
}
