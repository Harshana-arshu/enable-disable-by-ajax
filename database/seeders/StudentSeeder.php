<?php

namespace Database\Seeders;
use App\Models\Student;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student=new Student;
        $student->name='Anju';
        $student->fk_parent_id='1';
        $student->gender='F';
        $student->save();

        $student=new Student;
        $student->name='Alex';
        $student->fk_parent_id='2';
        $student->gender='M';
        $student->save();

        $student=new Student;
        $student->name='Rols';
        $student->fk_parent_id='2';
        $student->gender='M';
        $student->save();

        $student=new Student;
        $student->name='David';
        $student->fk_parent_id='3';
        $student->gender='M';
        $student->save();


    }
}
