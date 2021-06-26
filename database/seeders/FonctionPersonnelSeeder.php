<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FonctionPersonnel;


class FonctionPersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fonctions = [
            [
                'intituleFonctionP'=> 'Directeur'
            ],
            [
                'intituleFonctionP'=> 'Directeur Adjoint'
            ],
            [
                'intituleFonctionP'=> 'CSAF'
            ],
            [
                'intituleFonctionP'=> 'Sécrétaire Permanent'
            ],
            [
                'intituleFonctionP'=> 'Sécrétaire'
            ],
            [
                'intituleFonctionP'=> 'Chef de scolarité'
            ],
            [
                'intituleFonctionP'=> 'Agent de scolarité'
            ],
            [
                'intituleFonctionP'=> 'Bibliothécaire'
            ],
            [
                'intituleFonctionP'=> 'Chef bibliothécaire'
            ],
            [
                'intituleFonctionP'=> 'Reprographe'
            ]
        ];

        foreach ($fonctions as $fonction) {
            FonctionPersonnel::create($fonction);
        }
    }
}
