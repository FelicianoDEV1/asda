<?php

use Illuminate\Database\Seeder;

class CurriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\curriculum::create([
           'curriculum_year' => '2023', 
           'program_code' => 'BSAIT',
           'program_name' => 'Bachelor of Science in Aviation Information Technology',
           'control_code' => 'IT 212',
           'course_code' => 'IT 212',
           'course_name' => 'Object Oriented Programming 1 (Java)',
           'lec' => '2',
           'lab' => '1',
           'units' => '3',
           'level' => '2nd Year',
           'period' => '1st Semester',
           'is_complab' => '1'
        ]);
        
        \App\curriculum::create([
           'curriculum_year' => '2023', 
           'program_code' => 'BSAIT',
           'program_name' => 'Bachelor of Science in Aviation Information Technology',
           'control_code' => 'IT 211',
           'course_code' => 'IT 211',
           'course_name' => 'Computer Networking 2 (Routing)',
           'lec' => '3',
           'lab' => '1',
           'units' => '3',
           'level' => '2nd Year',
           'period' => '1st Semester',
           'is_complab' => '1'
        ]);
    }
}