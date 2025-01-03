<?php

namespace App\Http\Controllers;

use App\Service\BlogService;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    private $blogService;
    public function __construct(BlogService $blogService){
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = $this->blogService->index();
        return view('admin.blogs.index',compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->blogService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        return $this->blogService->store($request);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->blogService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, $id)
    {
        return $this->blogService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        return $this->blogService->delete($id);
    }
    // CLient 
        /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return $this->blogService->show($slug);
    }
    public function listBlogs(){
        return $this->blogService->listBlogs();
    }
}
