<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOptedCourse extends Model
{
    protected $table='student_opted_course';
    use HasFactory;
    
    
        public function student(){ 
        
            return $this->hasMany('App\Models\Student','id','student_id')->select(['name as student_name','id']);
        
    
        }
        public function course(){ 
        
            return $this->hasMany('App\Models\Course','id','course_id')->select(['name as course_name','id']);
        
    
        }
        public function parent(){ 
        
            return $this->hasMany('App\Models\Student','id','student_id')->join('student_opted_course','student_opted_course.student_id','=','student.id')
->join('parent','parent.id','=','student.fk_parent_id')
                          ->select(['parent.name as parent_name']);
        
    
        }
        
    
    
    }
