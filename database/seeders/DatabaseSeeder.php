<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([CiviliteSeeder::class]);
        $this->call([TitrePersonnelSeeder::class]);
        $this->call([FonctionPersonnelSeeder::class]);
        $this->call([TypePersonnelSeeder::class]);
        $this->call([AmpliationSeeder::class]);
    }
}
