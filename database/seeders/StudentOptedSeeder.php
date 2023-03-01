<?php

namespace Database\Seeders;
use App\Models\StudentOptedCourse;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentOptedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opted=new StudentOptedCourse;
        $opted->student_id='1';
        $opted->course_id='1';
        $opted->save();

        $opted=new StudentOptedCourse;
        $opted->student_id='1';
        $opted->course_id='4';
        $opted->save();

        $opted=new StudentOptedCourse;
        $opted->student_id='2';
        $opted->course_id='1';
        $opted->save();

        $opted=new StudentOptedCourse;
        $opted->student_id='3';
        $opted->course_id='2';
        $opted->save();

        $opted=new StudentOptedCourse;
        $opted->student_id='3';
        $opted->course_id='4';
        $opted->save();

    }
}
