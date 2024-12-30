<?php

namespace App\Service;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

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
    public function create(){
        return view('admin.course.add');
    }
    public function store(Request $request)
    {
    
        $imageName = null;
        if ($request->hasFile('thumbnail')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->thumbnail->getClientOriginalExtension();
            $request->thumbnail->move(public_path('assets/img/thumbnails'), $imageName);
        }
    
        // Lưu khóa học
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'thumbnail' => $imageName,
        ]);
    
        return redirect()->route('admin.course.index')->with('success', 'Thêm khóa học thành công!');
    }
    
    public function edit($id){
        $course = Course::find($id);
        return view('admin.course.edit',compact('course'));
    }
    
    public function update(Request $request, $id){
        $course = Course::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->content = $request->content;
        if ($request->hasFile('thumbnail')) {
            $imageName = time(). '_'. uniqid(). '.'. $request->thumbnail->getClientOriginalExtension();
            $request->thumbnail->move(public_path('assets/img/thumbnails'), $imageName);
            $course->thumbnail = $imageName;
        }
        $course->save();
        return redirect()->route('admin.course.index')->with('success', 'Cập nhật khóa học thành công!');
    }
    public function delete($id){
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('admin.course.index')->with('success', 'Xóa khóa học thành công!');
    }
    
}
