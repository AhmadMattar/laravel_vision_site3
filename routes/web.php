<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('site3')->group(function(){
    Route::get('/',[PagesController::class, 'index'])->name('site3index');
    Route::get('/about',[PagesController::class, 'about'])->name('site3about');
    Route::get('/experience',[PagesController::class, 'experience'])->name('site3experience');
    Route::get('/education',[PagesController::class, 'education'])->name('site3education');
    Route::get('/skills',[PagesController::class, 'skills'])->name('site3skills');
    Route::get('/interests',[PagesController::class, 'interests'])->name('site3interests');
    Route::get('/awards',[PagesController::class, 'awards'])->name('site3awards');
});

Route::get('/', function () {
    return view('welcome');
});
