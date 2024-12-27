<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.layouts.index');
});
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
