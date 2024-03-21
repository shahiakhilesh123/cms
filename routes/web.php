<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
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
Route::post('/pages/{link})', [App\Http\Controllers\PageController::class,'savePage'])->name('savePage.link');
Route::get('/blogs', [App\Http\Controllers\BlogController::class,'index'])->name('blogList');
Route::prefix('/categories')->group(function () {
    Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('categoryList');
    Route::get('/add', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addCategory');
    Route::post('/add', [App\Http\Controllers\CategoryController::class, 'categoryAdd'])->name('categoryAdd');
});
Route::get('files',[App\Http\Controllers\FileController::class, 'index'])->name('fileList');
Route::prefix('/blogs')->group(function () {
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('categoryList');
    Route::get('/add', [App\Http\Controllers\BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/add', [App\Http\Controllers\BlogController::class, 'blogAdd'])->name('blogAdd');
});