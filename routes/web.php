<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.layouts.index');
});
Route::get('/admin', function () {
    return view('admin.dashboard.index');
});
Route::get('/login',function () {
    return view('login');
});