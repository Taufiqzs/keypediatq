<?php
use App\Http\Controllers\keypediacontro;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/homepage', [keypediacontro::class, 'index']);
Route::get('/registerpage', [keypediacontro::class, 'indexregister']);
Route::post('/loginpage', [keypediacontro::class, 'keypedialogin']);
Route::get('/loginpage', [keypediacontro::class, 'indexlogin']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
