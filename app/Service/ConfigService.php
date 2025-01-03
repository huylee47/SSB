<?php

namespace App\Service;

use App\Http\Requests\StoreConfigRequest;
use App\Http\Requests\UpdateConfigRequest;
use App\Http\Resources\ConfigResource;
use App\Models\Config;

class ConfigService
{
    public function find($id)
    {
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
        $configs = ConfigResource::collection($configs);
//        return $configs;
        return view("admin.config.index", compact("configs"));
    }

    public function store(StoreConfigRequest $request)
    {
        $newConfig = $request->all();
        $logo = $request->file("logo");
        $favicon = $request->file("favicon");
        if(isset($logo)){
            $newConfig["logo"]="";
        }
        if(isset($favicon)){
        $newConfig["favicon"]="";
    }
        Config::create($newConfig);
        return $newConfig;
    }

    public function show($config)
    {
        $config = new ConfigResource($config);
        if(!isset($config->logo)){
            //Could do this
//            $config->logo="Chưa có logo";
            //But if user leave the field as is then it's doomed
            //And comparing checking if the field value is "Chưa có logo" is weird
        }
        return view("admin.config.detail", compact("config"));
    }

    public function edit(Config $config)
    {
        $config = new ConfigResource($config);
        return view("admin.config.edit", compact("config"));

    }

    public function create()
    {
        $config = new Config();
        return view("admin.config.add", compact("config"));

    }

    public function update(UpdateConfigRequest $request, Config $config)
    {

        $newConfig = $request->all();
        if ($config->id != $newConfig["id"]) {
            return response()->json(['error' => 'ID mismatch, update failed.'], 400);
        }

        //Grab file from request
        $logo = $request->file("logo");
        $favicon = $request->file("favicon");
        //Grab the original config to get some default values
        $originalConfig = Config::find($newConfig["id"]);

        //Setting up images manually. Should loop through $_File though





        if ($logo) {
            $extension = $logo->extension();
            $fileName = time(). '_'. uniqid(). '.'. $extension;
            $logo->move(public_path('assets/img/config'), $fileName);
            $newConfig['logo'] = $fileName;
        } else {
            $newConfig['logo'] = $originalConfig->logo;
        }

        if ($favicon) {
            $extension = $favicon->extension();
            $fileName = time(). '_'. uniqid(). '.'. $extension;
            $favicon->move(public_path('assets/img/icon'), $fileName);
            $newConfig['favicon'] = $fileName;
        } else {
            $newConfig['favicon'] = $originalConfig->favicon;
        }
        $updatedConfig = $config->update($newConfig);
        if ($updatedConfig) {
//            Normally it returns json
//           return response()->json($config, 200);
        //but since after editing, the user should return right back to edit view
            //And to refresh the url, do a redirect instead of returning a view
            return redirect()->route('config.edit', ['config' => $config->id]);
        }
        return response()->json(['error' => 'Failed to update config.'], 400);

    }


}
