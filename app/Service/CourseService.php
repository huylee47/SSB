<?php

namespace App\Service;
use App\Models\Course;
class CourseService {
    public function index(){
        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

}