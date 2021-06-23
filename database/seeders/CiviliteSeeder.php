<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Civilite;

class CiviliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $civilites = [
            [
                'intituleCivilite'=> 'Monsieur'
            ],
            [
                'intituleCivilite'=> 'Madame'
            ],
            [
                'intituleCivilite'=> 'Mademoiselle'
            ],
        ];

        foreach ($civilites as $civilite) {
            Civilite::create($civilite);
        }
    }
}
