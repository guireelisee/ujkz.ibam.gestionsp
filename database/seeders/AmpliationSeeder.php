<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ampliation;

class AmpliationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ampliations = [
            [
                'intitule'=>'Présidence'
            ],
            [
                'intitule'=>'DHR'
            ],
            [
                'intitule'=>'DAF'
            ],
            [
                'intitule'=>'AC'
            ],
            [
                'intitule'=>'SP'
            ],
            [
                'intitule'=>'Intéressé'
            ],
            [
                'intitule'=>'Chrono'
            ],
            [
                'intitule'=>'Etudiants'
            ],
            [
                'intitule'=>'Personnel'
            ],
        ];

        foreach ($ampliations as $ampliation) {
            Ampliation::create($ampliation);
        }
    }
}
