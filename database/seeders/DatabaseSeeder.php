<?php

namespace Database\Seeders;

use App\Models\fakultas;
use App\Models\kuliah;
use App\Models\mahasiswa;
use App\Models\mataKuliah;
use App\Models\programStudy;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        fakultas::factory(1)->create();
        programStudy::factory(2)->create();
        mahasiswa::factory(10)->create();
        mataKuliah::factory(10)->create();
        kuliah::factory(10)->create();
    }
}
