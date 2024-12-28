<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConfigRequest;
use App\Http\Requests\UpdateConfigRequest;
use App\Models\Config;
use App\Service\ConfigService;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    private $configService;

    public function __construct(ConfigService $configService){
        $this->configService = $configService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->configService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return $this->configService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConfigRequest $request)
    {
         return $this->configService->store($request);
    }


    /**
     * Display the specified resource.
     */
    public function show(Config $config)
    {
       return   $this->configService->show($config);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Config $config)
    {
       return $this->configService->edit($config);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConfigRequest $request, Config $config)
    {
      return  $this->configService->update($request,$config);
    }



}
