<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginaPrincipal\InstitucionalController;
use App\Http\Controllers\PaginaPrincipal\PessoasController;
use App\Http\Controllers\PaginaPrincipal\ContatoController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\NovaSenhaController;
use App\Http\Controllers\Auth\RecuperaSenhaController;
use App\Http\Controllers\Admin\GCMenuSiteController;
use App\Http\Controllers\Admin\GCInstitucionalController;

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

Route::get('/ptbr', [HomeController::class, 'getLangPortuguese'])->middleware('idioma.site')->name('lang.portuguese');

Route::get('/en', [HomeController::class, 'getLangEnglish'])->middleware('idioma.site')->name('lang.english');

Route::get('/', [HomeController::class, 'index'])->middleware('idioma.site')->name('home');

Route::get('/', [HomeController::class, 'index'])->middleware('idioma.site')->name('/home');

Route::get('/institucional', [InstitucionalController::class, 'index'])->middleware('idioma.site')->name('/institucional');

Route::get('/pessoas', [PessoasController::class, 'index'])->middleware('idioma.site')->name('/pessoas');

Route::get('/contato', [ContatoController::class, 'index'])->middleware('idioma.site')->name('/contato');

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/gc', function (){
        return view('admin.gc');
    })->name('gc');

    Route::get('/gc/menu/site', [GCMenuSiteController::class, 'index'])->name('menus.site');

    Route::post('/gc/menu/site', [GCMenuSiteController::class, 'cadastrar_menu']);

    Route::get('/gc/conteudo/institucional', [GCInstitucionalController::class, 'index'])->name('conteudo.institucional');

    Route::post('/gc/conteudo/institucional', [GCInstitucionalController::class, 'atualizar_conteudo_institucional']);
});

Route::get('/gc', [LoginController::class, 'index'])->name('login');


Route::get('/gc', [LoginController::class, 'index'])->name('login');

Route::post('/gc', [LoginController::class, 'logar']);

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
