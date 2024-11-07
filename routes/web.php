<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubScriber\GetAllSubScriberController;
use App\Http\Controllers\Blog\GetAllBlogController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/subScriber/{blog}' , GetAllSubScriberController::class)->name('getAllSubScribers');
Route::get('/blog' , GetAllBlogController::class)->name('getAllBlogs');