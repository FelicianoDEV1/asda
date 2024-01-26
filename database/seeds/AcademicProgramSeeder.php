<?php

use Illuminate\Database\Seeder;

class AcademicProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\academic_programs::create([
           'academic_type' => 'College',
           'department' => ' ',
           'program_code' => 'BSAIT',
           'program_name' => 'Bachelor of Science in Aviation Information Technology',
        ]);
        
        \App\academic_programs::create([
           'academic_type' => 'College',
           'department' => ' ',
           'program_code' => 'BSAIS',
           'program_name' => 'Bachelor of Science in Aviation Information System',
        ]);
    }
}