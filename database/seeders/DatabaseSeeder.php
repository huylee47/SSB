<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use App\Models\Blog;
use App\Models\Config;
use App\Models\Course;
use App\Models\Contact;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
       $jsonFilePath = "./database/seeders/data.json";
       $jsonContent = file_get_contents($jsonFilePath);
       $dataArray = json_decode($jsonContent, true);
       
       foreach ($dataArray['user'] as $data) {
        User::factory()->create([
            'name' => $data['name'],
            'username' => $data['username'], 
            'email' =>  $data['email'],
            'avatar' => $data['avatar'], 
            'role_id' =>$data['role_id'],
            'password' =>Hash::make($data['password']), 
            ]);
       }
       foreach ($dataArray['role'] as $data) { Role::create($data);}
       foreach ($dataArray['config'] as $data) { Config::create($data);}
       foreach ($dataArray['blog'] as $data) { Blog::create($data);}
       foreach ($dataArray['course'] as $data) { Course::create($data);}


}
        

}