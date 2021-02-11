<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student__courses')->insert(
            [
                ['user_id' => 25, 'course_id' => 16],
                ['user_id' => 26, 'course_id' => 17],
                ['user_id' => 27, 'course_id' => 18],
                ['user_id' => 28, 'course_id' => 19],
            ]
        );
    }
}
