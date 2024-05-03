<?php
use App\Http\Controllers\coursescontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('course');
});

Route::post('/create',[coursescontroller::class,'savecourses']);
   
Route::get('/get-courses',[coursescontroller::class,'index']);
Route::get('/edit/{id}',[coursescontroller::class,'getupdatecoursefrm']);
Route::get('/delete/{id}',[coursescontroller::class,'deletecourse']);
Route::post('/update-course/{id}',[coursescontroller::class,'updatecourses']);

