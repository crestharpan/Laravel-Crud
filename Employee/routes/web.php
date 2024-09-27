<?php

use App\Http\Controllers\employeecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('employee', employeecontroller::class)->names('employee');
