<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[FrontendController::class,'index'])->name('front.index');
Route::get('/single-post',[FrontendController::class,'single'])->name('front.single');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'dashboard'],function () {

    Route::get('/',[BackendController::class,'index'])->name('back.index');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


