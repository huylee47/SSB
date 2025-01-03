<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"])->name('index');
Route::get("/about",[IndexController::class,"about"])->name("about");


Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'login'])->name('login.auth');
});
Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
        Route::prefix('/course')->group(function () {
            Route::get('/', [CourseController::class, 'index'])->name('admin.course.index');
            Route::get('/add', [CourseController::class, 'create'])->name('admin.course.add');
            Route::post('/store',[CourseController::class,'store'])->name('admin.course.store');
            Route::get('/edit/{id}',[CourseController::class,'edit'])->name('admin.course.edit');
            Route::post('/update/{id}',[CourseController::class,'update'])->name('admin.course.update');
            Route::get('/delete/{id}',[CourseController::class,'delete'])->name('admin.course.delete');
        });
        Route::prefix("/blog")->group(function () {
            Route::get("/", [BlogController::class, "index"])->name("admin.blog.index");
            Route::get("/add", [BlogController::class, "create"])->name("admin.blog.add");
            Route::post("/store",[BlogController::class,"store"])->name("admin.blog.store");
            Route::get("/edit/{id}",[BlogController::class,"edit"])->name("admin.blog.edit");
            Route::post("/update/{id}",[BlogController::class,"update"])->name("admin.blog.update");
            Route::get("/delete/{id}",[BlogController::class,"delete"])->name("admin.blog.delete");
        });
        Route::prefix("config")->name("config.")->group(function () {
            Route::post("/update/{config}", [ConfigController::class, "update"])->name("update");//Gọi để update
            Route::post("", [ConfigController::class, "store"])->name("store");//Gọi để lưu
            Route::get("/add", [ConfigController::class, "create"])->name("create");//Gọi để vào create view
            Route::any("/edit/{config}", [ConfigController::class, "edit"])->name("edit");//Gọi để vào edit view
            Route::get("", [ConfigController::class, "index"])->name("index");//Gọi để hiển thị tất cả config
            Route::get("/{config}", [ConfigController::class, "show"])->name("show");//Hiêển thị chi tiết
        });
    });
});




//Route::get("/contact/create",[ContactController::class,"create"])->name("contact.create");
//Route::post("contact/store",[ContactController::class,"store"])->name("contact.store");
Route::prefix("contact")->name("contact.")->group(function (){
    Route::get("/create",[ContactController::class,"create"])->name("create");
    Route::post("/store",[ContactController::class,"store"])->name("store");
    Route::get("",[ContactController::class,"index"])->name("index");
});
Route::prefix("/blog")->group(function () {
    Route::get("", [BlogController::class, "listBlogs"])->name("blog.index");
    Route::get("/{slug}", [BlogController::class, "show"])->name("blog.show");
});




