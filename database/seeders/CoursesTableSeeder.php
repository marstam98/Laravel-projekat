<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                ['language' => 'Engleski'],
                ['language' => 'Nemacki'],
                ['language' => 'Italijanski'],
                ['language' => 'Francuski']
            ]
        );
    }
}
