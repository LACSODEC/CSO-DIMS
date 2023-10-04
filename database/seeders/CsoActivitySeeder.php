<?php

namespace Database\Seeders;

use App\Models\CsoActivityDomain;
use Illuminate\Database\Seeder;

class CsoActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Women empowerment',
                'french_name' => 'Autonomisation des femmes',
            ],
            [
                'name' => 'Youth empowerment',
                'french_name' => 'Autonomisation des jeunes',
            ],
            [
                'name' => 'Environmental protection',
                'french_name' => 'Protection environnementale',
            ],
            [
                'name' => 'Governance',
                'french_name' => 'Gouvernance',
            ],
            [
                'name' => 'Water',
                'french_name' => 'Eau',
            ],
            [
                'name' => 'Human rights',
                'french_name' => 'Droits humains',
            ],
            [
                'name' => 'Child protection',
                'french_name' => "Protection de l'enfance",
            ],
            [
                'name' => 'Peace Building',
                'french_name' => 'Construction de la paix',
            ],
            [
                'name' => 'Humanitarian response',
                'french_name' => 'Réponse humanitaire',
            ],
            [
                'name' => 'GBV prevention/response',
                'french_name' => 'Prévention/réponse à la VBG',
            ],
            [
                'name' => 'Education',
                'french_name' => 'Education',
            ],
            [
                'name' => 'CSO strengthening',
                'french_name' => 'Renforcement des OSC',
            ],
            [
                'name' => 'ICT',
                'french_name' => 'TIC',
            ],
            [
                'name' => 'Climate protection',
                'french_name' => 'Protection climatique',
            ],
            [
                'name' => 'Food security',
                'french_name' => 'La sécurité alimentaire',
            ],
            [
                'name' => 'Animal protection',
                'french_name' => 'Protection des animaux',
            ],
            [
                'name' => 'Marine life protection',
                'french_name' => 'Protection de la vie marine',
            ],
            [
                'name' => 'Renewable energy',
                'french_name' => 'Énergie renouvelable',
            ],
            [
                'name' => 'Waste management',
                'french_name' => 'La gestion des déchets',
            ],
            [
                'name' => 'others',
                'french_name' => 'autres',
            ],
            [
                'name' => 'Mental Health',
                'french_name' => 'Santé Mentale',
            ],
            [
                'name' => 'Agriculture',
                'french_name' => 'Agriculture',
            ],
            [
                'name' => 'Rural Development',
                'french_name' => 'Developpement Rural',
            ],
        ];

        $this->insertCsoActivityDomains($data);
    }

    public function insertCsoActivityDomains($data)
    {
        foreach ($data as $item) {
            CsoActivityDomain::updateOrCreate(
                ['name' => $item['name']],
                ['french_name' => $item['french_name']]
            );
        }
    }
}
