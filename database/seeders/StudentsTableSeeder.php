<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            [
                ['name' => 'Marko', 'surname' => 'Jovanovic', 'years' => 22],
                ['name' => 'Ivana', 'surname' => 'Nikolic', 'years' => 15],
                ['name' => 'Stefan', 'surname' => 'Mihajlovic', 'years' => 14],
                ['name' => 'Nevena', 'surname' => 'Petrovic', 'years' => 31]
            ]
        );
    }
}
