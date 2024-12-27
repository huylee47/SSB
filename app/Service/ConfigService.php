<?php

namespace App\Service;

use App\Http\Requests\StoreConfigRequest;
use App\Http\Requests\UpdateConfigRequest;
use App\Http\Resources\ConfigResource;
use App\Models\Config;

class ConfigService
{
    public function find($id) {
        $config = Config::find($id);

        if ($config) {
            return new ConfigResource($config);
        } else {
            return response()->json(['message' => 'Not found'], 404);
        }
    }
    public function index()
    {
        $configs = Config::all();
        $configs=  ConfigResource::collection($configs);
//        return $configs;
        return view("admin.config.index", compact("configs"));
    }

    public function store(StoreConfigRequest $request)
    {
        $newConfig = $request->all();
        Config::create($newConfig);
        return $newConfig;
    }

    public function show($config)
    {
        $config = new ConfigResource($config);
//        return $config;
        return view("admin.config.index",compact("config"));
    }

    public function edit(Config $config)
    {
        $config = new ConfigResource($config);
        return view("admin.config.edit",compact("config"));

    }
    public function create()
    {
        $config = new Config();
        return view("admin.config.add",compact("config"));

    }

    public function update(UpdateConfigRequest $request,Config $config)
    {
        $newConfig = $request->all();
        if($config->id != $newConfig["id"]){
            return response()->json(['error' => 'ID mismatch, update failed.'], 400);
        }
        $updatedConfig = $config->update($newConfig);
        if ($updatedConfig) {
            return response()->json($config, 200);
        }
            return response()->json(['error' => 'Failed to update config.'], 400);

    }



}
