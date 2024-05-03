<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courses;

class coursescontroller extends Controller
{
    //public function getcourses(){
     //   return view('index');
   // }
    public function savecourses(request $request){
        $course=new courses();
        $course->name=$request->name;
        $course->details=$request->details;
        $course->save();
        return redirect('/get-courses');
//$name=$request->name;
//$details=$request->details;
//return $name."this is name&nbsp;".$details;
    }
    public function index(){
        $getcourses= courses::all();
        return  view('courses',['courses'=>$getcourses]);
    }
    public function getupdatecoursefrm($id){
         $course=courses::find($id);
         return view('edit-course',['course'=>$course]);
 
    }
    public function updatecourses(request $request,$id){
        $course= courses::find($id);
        $course->name=$request->name;
        $course->details=$request->details;
        $course->update();
        return redirect('/get-courses');
    }
    public function deletecourse($id){
        $course=courses::find($id);
        if(!$course){
            return "record not found";
         }
         $course->delete();
         return back();

    } 
}
