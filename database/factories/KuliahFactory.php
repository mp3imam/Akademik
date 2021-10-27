<?php

namespace Database\Factories;

use App\Models\kuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

class KuliahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = kuliah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mata_kuliah_id' => rand(1,10),
            'mahasiswa_id' => rand(1,10),
            'semester' => rand(1,2),
            'tahun_ajar' => 2022,
            'nil_tugas' => rand(70,100),
            'nil_uts' => rand(70,100),
            'nil_uas' => rand(70,100),
        ];
    }
}
