<?php

namespace App\Http\Controllers;

use App\Service\ConfigService;
use App\Service\CourseService;
use App\Service\BlogService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $configService;
    private $blogService;
    private $courseService;

    public function __construct(ConfigService $configService,CourseService $courseService,  BlogService $blogService){
        $this->configService = $configService;
        $this->courseService = $courseService;
        $this->blogService = $blogService;
    }

    public function index(){
        $config = $this->configService->find(1);//By default there should be only one record, so ID = 1
        $courses = $this-> courseService->indexAPI();
        $blogs = $this->blogService->RecentBlog();
        $isSPA=false;
        //Checking if page is loaded directly or through spa
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            $isSPA=true;
        }
        return view('client.layouts.index',compact("config","courses","isSPA","blogs"));
    }
    public function  about(){
        $config = $this->configService->find(1);
        $isSPA=false;
        //Checking if page is loaded directly or through spa
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            $isSPA=true;
        }
        return view('client.about.index',compact("config","isSPA"));
    }
}
