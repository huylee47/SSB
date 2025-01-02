<?php

namespace App\Service;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class BlogService{
    public function index(){
        $blogs = Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }
    public function create(){
        return view('admin.blogs.add');
    }
    public function store($request){
        $user_id = Auth::user();
        $imageName = null;
        if ($request->hasFile('avatar')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('assets/img/blog'), $imageName);
        }
        Blog::create([
            'user_id' => $user_id->id,
            'title' => $request->title,
            'avatar' => $imageName,
            'content' => $request->content,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);
        return redirect()->route('admin.blog.index')->with('success', 'Thêm mới thành công');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    public function update($request, $id){
        $blog = Blog::find($id);
        if ($request->hasFile('avatar')) {
            $imageName = time(). '_'. uniqid(). '.'. $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('assets/img/blog'), $imageName);
            $blog->avatar = $imageName;
        }
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->description = $request->description;
        $blog->avatar = $imageName;
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Sửa thành công');

    }
    public function delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'xoá thành công');

    }
    // Client 
    public function show($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view('blogs.detail',compact('blog'));
    }
}