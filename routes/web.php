<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
use app\Providers\RouteServiceProvider;
use app\Http\Controllers\DashBoardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::get('/carta', function () {
    return view('carta');
});

Route::get('/', function () {
    return view('auth/login');
});

//rota para os dois usuários
Route::group(['middleware' => ['auth']], function(){

    Route::get('/dashboard','App\Http\Controllers\DashBoardController@index')->name('dashboard');
    Route::get('/dashboard','App\Http\Controllers\DashBoardController@editar')->name('dashboard');
    Route::post('/dashboard/Conteudo', 'app\Http\Controllers\ContentsController@Conteudo')->name('dashboard.Conteudo');
     Route::get('/dashboard/TesteInput','app\Http\Controllers\ContentsController@TesteInput')->name('dashboard.TesteInput');
     Route::get('/dashboard/products','app\Http\Controllers\ContentsController@products')->name('dashboard.products');
    Route::get('/dashboard/GerarDeclaracao', 'app\Http\Controllers\DashBoardController@GerarDeclaracao')->name('dashboard.GerarDeclaracao');
    Route::get('/dashboard/download/{declaracao}','app\Http\Controllers\ContentsController@download')->name('dashboard.download');
    
    
  
    });

Route::group(['middleware' => ['auth', 'role:admin']], function(){
   
    
    Route::get('/dashboard/Historico','app\Http\Controllers\ContentsController@Historico' )->name('dashboard.Historico');
    //Route::get('/dashboard/teste','App\Http\Controllers\ContentsController@teste' )->name('dashboard.teste');
    Route::post('/dashboard/index_pdf','app\Http\Controllers\PdfController@CDF' )->name('dashboard.index_pdf');
    //Route::post('/dashboard/store','App\Http\Controllers\AssetsController@store' )->name('dashboard.store');
    Route::get('/dashboard/getPDF','app\Http\Controllers\PdfController@getPDF')->name('dashboard.getPDF');

    Route::get('/dashboard/pdfview','app\Http\Controllers\PdfController@pdfview')->name('dashboard.pdfview');


   
});







require __DIR__.'/auth.php';
