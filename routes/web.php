<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\http\Controllers\Site\MainController as SiteMain;
use \App\http\Controllers\Panel\MainController as PanelMain;
use \App\http\Controllers\System\MainController as SystemMain;

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


#Rotas do Site 
Route::name('site.')->group(function (){

    #Rotas do COntroller Principal (main) 
    Route::name('main')->group(function (){

        #Rota index do Site
        Route::get('/', [SiteMain::class, "index"])->name("index");
    });

});



Auth::routes();

#Rotas do Painel de Controlle (Dashboard)
Route::middleware("auth")->name('panel.')->group(function (){

    #Rotas do COntroller Principal (main) 
    Route::name('main')->group(function (){

        #Rota index do Dashboard
        Route::get('/dashboard', [PanelMain::class, "index"])->name("index");
    });

});

#Rotas do Sistema (Dashboard)
Route::name('system.')->group(function (){

    #Rotas do COntroller Principal (main) 
    Route::name('main')->group(function (){

        #Rota index do Sistema
        Route::get('/system', [SystemMain::class, "index"])->name("index");
    });

});

