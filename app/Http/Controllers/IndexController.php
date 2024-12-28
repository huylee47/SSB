<?php

namespace App\Http\Controllers;

use App\Service\ConfigService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $configService;

    public function __construct(ConfigService $configService){
        $this->configService = $configService;
    }

    public function index(){
        $config = $this->configService->find(1);//By default there should be only one record, so ID = 1
        return view('client.layouts.index',compact("config"));
    }
}
