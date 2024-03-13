<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'menuList'])->name('menulist');
Route::get('/addmenu', [App\Http\Controllers\MenuController::class, 'addMenu'])->name('addMenu');
Route::post('/menuadd', [App\Http\Controllers\MenuController::class,'menuAdd'])->name('menuAdd');
Route::get('/editmenu/{id}', [App\Http\Controllers\MenuController::class,'editmenu'])->name('editmenu');
Route::post('/menuedit/{id}', [App\Http\Controllers\MenuController::class,'menuedit'])->name('menuedit');
Route::get('/pages', [App\Http\Controllers\PageController::class,'index'])->name('pages');
Route::get('/pages/{link})', [App\Http\Controllers\PageController::class,'editor'])->name('editor.link');
Route::post('/pages/{link})', [App\Http\Controllers\PageController::class,'savePage'])->name('editor.savePage');
