<?php

namespace App\Service;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseService {
    public function index(){
        $courses = Course::all();
        return view('admin.course.index', compact('courses'));
    }

    public function indexAPI(){
        $courses = Course::all();
        return CourseResource::collection($courses);
    }

    public function show($slug){

        $course = Course::where('slug', $slug)->first();
        if (!$course) {
            return redirect()->route('client.course.index')->with('error', 'Khóa học không tồn tại!');
        }
        return view('client.course.detail', compact('course'));
    }

    public function create(){
        return view('admin.course.add');
    }

    public function store(Request $request)
    {
        $imageName = null;
        $request->validate([
            'thumbnail' => 'required|max:2048',
        ],
        [
            'thumbnail.required' => 'Thiếu ảnh.',
            'thumbnail.max' => 'Ảnh không được vượt quá 2MB.',
        ]);
        if ($request->hasFile('thumbnail')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->thumbnail->getClientOriginalExtension();
            $request->thumbnail->move(public_path('assets/img/thumbnails'), $imageName);
        }

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
        if (!$course) {
            return redirect()->route('admin.course.index')->with('error', 'Khóa học không tồn tại!');
        }
        return view('admin.course.edit', compact('course'));
    }

    public function update(Request $request, $id){
        $course = Course::find($id);
        if (!$course) {
            return redirect()->route('admin.course.index')->with('error', 'Khóa học không tồn tại!');
        }

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
        if (!$course) {
            return redirect()->route('admin.course.index')->with('error', 'Khóa học không tồn tại!');
        }

        if ($course->thumbnail && file_exists(public_path('assets/img/thumbnails/' . $course->thumbnail))) {
            unlink(public_path('assets/img/thumbnails/' . $course->thumbnail));
        }

        $course->delete();

        return redirect()->route('admin.course.index')->with('success', 'Xóa khóa học thành công!');
    }

    public function listCourses(){
        $isSPA=false;
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            $isSPA=true;
        }
        $courses = Course::paginate(4);
        return view('client.course.index', compact('courses',"isSPA"));
    }
}
