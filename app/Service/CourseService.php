<?php

namespace App\Service;
use App\Http\Resources\CourseResource;
use App\Models\Course;
class CourseService {
    public function index(){
        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

    //Function to get all courses as JSON
    //Or basically an api
    //Used to pass data to views
    public function indexAPI(){
        $courses = Course::all();
        $courses =  CourseResource::collection($courses);
        return $courses;
    }

}
