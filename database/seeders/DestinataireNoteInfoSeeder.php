<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DestinataireNoteInfo;
class DestinataireNoteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinataires = [
            [
                'intituleDNI'=>'étudiants autorisés à s’inscrire en Master I (MAGE, MCCA, MBF et MI), à l’IBAM au titre de 2020-2021'
            ],
            [
                'intituleDNI'=>'étudiants autorisés à s’inscrire en Master II (MAGE, MCCA, MBF et MI), à l’IBAM au titre de 2020-2021 '
            ],
            [
                'intituleDNI'=>'auditeurs de Licence I, II, et III toutes filières confondues'
            ],
            [
                'intituleDNI'=>'enseignants, du personnel ATOS et des étudiants de l’IBAM'
            ],
            [
                'intituleDNI'=>'tout le personnel de l’IBAM'
            ]
        ];

        foreach ($destinataires as $destinataire) {
            DestinataireNoteInfo::create($destinataire);
        }
    }
}
