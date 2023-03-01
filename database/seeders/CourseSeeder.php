<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course=new Course;
        $course->name='English';
        $course->dept='English';
        $course->save();

        $course=new Course;
        $course->name='Mathematics';
        $course->dept='Maths';
        $course->save();

        $course=new Course;
        $course->name='Science';
        $course->dept='Science';
        $course->save();

        $course=new Course;
        $course->name='Economics';
        $course->dept='Science';
        $course->save();
    }
}
