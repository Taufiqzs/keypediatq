<?php
use App\Http\Controllers\keypediacontro;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('homepage');
});

Route::get('/homepage', [HomeController::class, 'listCategories']);
Route::get('/registerpage', [keypediacontro::class, 'indexregister']);
Route::post('/loginpage', [keypediacontro::class, 'keypedialogin']);
Route::get('/loginpage', [keypediacontro::class, 'indexlogin']);
Route::get('/manageCategory', [CategoryController::class, 'listCategories']);
Route::put('/manageCategory/update/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
Route::delete('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');



Route::get('/auth/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('store');

Auth::routes();

