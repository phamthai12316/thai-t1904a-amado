<?php

use Illuminate\Database\Seeder;

class StudentSurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\StudentSurvey::class, 50) -> create();

    }
}
