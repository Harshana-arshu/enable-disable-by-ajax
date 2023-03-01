<?php

namespace App\Http\Controllers;
use App\Models\StudentOptedCourse;
use App\Models\Student;
use App\Models\Front;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    try{
        $soc=StudentOptedCourse::join('course','course.id','=','student_opted_course.course_id')->join('student','student.id','=','student_opted_course.student_id')->join('parent','parent.id','=','student.fk_parent_id')
        ->select('student_opted_course.*','course.name as course_name','student.name as student_name','parent.name as parent_name')->get();
 
    
        return view('index',['soc'=>$soc]);
    }
    catch (Exception $e) {
        return $e;
    }
}
public function changeStatus(Request $request)
{
    $user =StudentOptedCourse::find($request->id);
    $user->status= $request->is_active;
    $user->save();

    return response()->json(['success'=>'Status change successfully.']);
}}
