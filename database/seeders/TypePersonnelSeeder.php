<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypePersonnel;

class TypePersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'intituleTP'=> 'Enseignant'
            ],
            [
                'intituleTP'=> 'ATOS'
            ]
        ];

        foreach ($types as $type) {
            TypePersonnel::create($type);
        }
    }
}
