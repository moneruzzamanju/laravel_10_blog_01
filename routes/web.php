<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'index'])->name('front.index');
Route::get('/single-post',[FrontendController::class,'single'])->name('front.single');
