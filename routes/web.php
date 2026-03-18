<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/admin/login', 'admin.auth.login')->name('admin.login');
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');