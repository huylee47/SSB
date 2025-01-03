<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Service\CourseService;
use App\Http\Requests\CourseRequest;


class CourseController extends Controller
{
    private $courseService;
    public function __construct(CourseService $courseService){
        $this->courseService = $courseService;
    }
    public function index()
    {
        return $this->courseService->index();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->courseService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        return $this->courseService->store($request);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->courseService->edit($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, $id)
    {
        return $this->courseService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        return $this->courseService->delete($id);
    }
    // Client 
    
    /**
     * Display the specified resource.
     */
    public function show($lug)
    {
        return $this->courseService->show($lug);
    }
    public function listCourses(){
        return  $this->courseService->listCourses();
    }
}
