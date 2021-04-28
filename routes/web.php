<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\NovaSenhaController;
use App\Http\Controllers\Auth\RecuperaSenhaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/gc', function (){
    return "você pode acessar.";
})->middleware('admin');

Route::get('/login', [LoginController::class, 'index'])
->name('login');

Route::post('/login', [LoginController::class, 'logar']);

Route::get('/forgot-password', [RecuperaSenhaController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [RecuperaSenhaController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NovaSenhaController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NovaSenhaController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::post('/logout', [LoginController::class, 'logout'])
                ->middleware('auth')
                ->name('logout');
