<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Intern;

class InternSeeder extends Seeder
{
    public function run()
    {
        $interns = [
            [
                'image' => 'public/images/intern.png',
            ],
        ];

        foreach ($interns as $intern) {
            Intern::create($intern);
        }
    }
}
