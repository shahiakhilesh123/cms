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

Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage'])->name('homePage');

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
    Route::get('/edit/{id}', [App\Http\Controllers\CategoryController::class, 'editCategory'])->name('editCategory');
    Route::post('/edit/{id}', [App\Http\Controllers\CategoryController::class, 'categoryEdit'])->name('categoryEdit');
});
Route::prefix('/files')->group(function () {
    Route::get('/',[App\Http\Controllers\FileController::class, 'index'])->name('fileList');
    Route::get('/add',[App\Http\Controllers\FileController::class, 'fileAdd'])->name('fileAdd');
    Route::post('/add',[App\Http\Controllers\FileController::class, 'addFile'])->name('addFile');
});
Route::prefix('/posts')->group(function () {
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('categoryList');
    Route::get('/add', [App\Http\Controllers\BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/add', [App\Http\Controllers\BlogController::class, 'blogAdd'])->name('blogAdd');
});
Route::get('/setting', [App\Http\Controllers\SettingController::class,'index'])->name('Setting');
Route::post('/setting', [App\Http\Controllers\SettingController::class,'saveSetting'])->name('saveSetting');
Route::prefix('/state')->group(function () {
    Route::get('/', [App\Http\Controllers\StateController::class, 'index'])->name('stateList');
    Route::get('/add', [App\Http\Controllers\StateController::class, 'add'])->name('addState');
    Route::post('/add', [App\Http\Controllers\StateController::class, 'save'])->name('stateAdd');
    Route::get('/edit/{id}', [App\Http\Controllers\StateController::class, 'edit'])->name('editState');
    Route::post('/edit/{id}', [App\Http\Controllers\StateController::class, 'editSave'])->name('stateEdit');
});
Route::prefix('/district')->group(function () {
    Route::get('/', [App\Http\Controllers\DistrictController::class, 'index'])->name('districtList');
    Route::get('/add', [App\Http\Controllers\DistrictController::class, 'add'])->name('addDistricte');
    Route::post('/add', [App\Http\Controllers\DistrictController::class, 'save'])->name('districtAdd');
    Route::get('/edit/{id}', [App\Http\Controllers\DistrictController::class, 'edit'])->name('editDistrict');
    Route::post('/edit/{id}', [App\Http\Controllers\DistrictController::class, 'editSave'])->name('districtEdit');
});
Route::get('/test',[App\Http\Controllers\TestCOntroller::class, 'index'])->name('test');
Route::prefix('/page')->group(function () {
    Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('PageList');
    Route::get('/add', [App\Http\Controllers\PagesController::class, 'add'])->name('addPage');
    Route::post('/add', [App\Http\Controllers\PagesController::class, 'save'])->name('pageAdd');
    // Route::get('/edit/{id}', [App\Http\Controllers\DistrictController::class, 'edit'])->name('editDistrict');
    // Route::post('/edit/{id}', [App\Http\Controllers\DistrictController::class, 'editSave'])->name('districtEdit');
});
Route::prefix('/sequence')->group(function () {
    Route::get('/', [App\Http\Controllers\PageSequenceController::class, 'index'])->name('SequenceList');
    Route::get('/add', [App\Http\Controllers\PageSequenceController::class, 'add'])->name('addSequence');
    Route::post('/add', [App\Http\Controllers\PageSequenceController::class, 'save'])->name('sequenceAdd');
});