<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesors')->insert(
            [
                ['name' => 'Janko', 'surname' => 'Jankovic', 'level' => 'C1', 'course_id' => 17],
                ['name' => 'Danilo', 'surname' => 'Simic', 'level' => 'B2', 'course_id' => 16],
                ['name' => 'Nikola', 'surname' => 'Majstorovic', 'level' => 'C2', 'course_id' => 18],
                ['name' => 'Milan', 'surname' => 'Ostojic', 'level' => 'C1', 'course_id' => 19]
            ]
        );
    }
}
