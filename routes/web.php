<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::post('/student_post',[HomeController::class,'student_post'])->name('student_post');
