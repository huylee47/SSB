<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,"index"]);

Route::prefix('/')->group(function (){
    Route::get('/login', [LoginController::class, 'index'])->name('login.view');
    // Route::get('/login', function () {
    //     return view('login');
    // });

    Route::post('/login/auth', [LoginController::class, 'login'])->name('login.auth');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/admin', function () {
        return view('admin.dashboard.index');
    });
});
Route::post("/config",[ConfigController::class,"store"])->name("config.store");//Gọi để lưu

Route::get("/config/add",[ConfigController::class,"create"]);//Gọi để vào create view

Route::get("/config",[ConfigController::class,"index"])->name("config.index");//Gọi để hiển thị tất cả config

Route::get("/config/{config}",[ConfigController::class,"show"])->name("config.show");//Hiêển thị chi tiết

Route::put("/config/{config}",[ConfigController::class,"update"])->name("config.update");//Gọi để update




