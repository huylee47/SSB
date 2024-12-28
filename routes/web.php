<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
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
    Route::prefix('/admin')->group(function(){
        Route::get('/', [DashboardController::class,'index'])->name('admin.index');
        Route::prefix('/course')->group(function(){
        Route::get('/',[CourseController::class,'index'])->name('admin.course.index');
        Route::get('/add',[CourseController::class,'create'])->name('course.add');
        // Route::post('/store',[CourseController::class,'store'])->name('course.store');
        // Route::get('/edit/{course}',[CourseController::class,'edit'])->name('course.edit');
        // Route::put('/update/{course}',[CourseController::class,'update'])->name('course.update');
        // Route::delete('/delete/{course}',[CourseController::class,'destroy'])->name('course.delete');
    });
    });

});



Route::prefix("config")->name("config.")->group(function (){
    Route::post("",[ConfigController::class,"store"])->name("store");//Gọi để lưu
    Route::get("/add",[ConfigController::class,"create"])->name("create");//Gọi để vào create view
    Route::any("/edit/{config}",[ConfigController::class,"edit"])->name("edit");//Gọi để vào edit view
    Route::get("",[ConfigController::class,"index"])->name("index");//Gọi để hiển thị tất cả config
    Route::get("/{config}",[ConfigController::class,"show"])->name("show");//Hiêển thị chi tiết
    Route::put("/{config}",[ConfigController::class,"update"])->name("update");//Gọi để update
});

//Route::post("/config",[ConfigController::class,"store"])->name("config.store");//Gọi để lưu
//
//Route::get("/config/add",[ConfigController::class,"create"])->name("config.create");//Gọi để vào create view
//
//Route::any("/config/edit/{config}",[ConfigController::class,"edit"])->name("config.edit");//Gọi để vào edit view
//
//Route::get("/config",[ConfigController::class,"index"])->name("config.index");//Gọi để hiển thị tất cả config
//
//Route::get("/config/{config}",[ConfigController::class,"show"])->name("config.show");//Hiêển thị chi tiết
//
//Route::put("/config/{config}",[ConfigController::class,"update"])->name("config.update");//Gọi để update






