<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TitrePersonnel;

class TitrePersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titres = [
            [
                'intituleTitreP'=> 'Professeur titulaire'
            ],
            [
                'intituleTitreP'=> 'Docteur'
            ],
            [
                'intituleTitreP'=> 'Maître Assistant'
            ],
            [
                'intituleTitreP'=> 'Maître de conférences'
            ],
        ];

        foreach ($titres as $titre) {
            TitrePersonnel::create($titre);
        }
    }
}
