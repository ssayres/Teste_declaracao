<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\PdfController;

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
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::post('/dashboard/Conteudo', 'App\Http\Controllers\ContentsController@Conteudo')->name('dashboard.Conteudo');
     Route::get('/dashboard/TesteInput','App\Http\Controllers\ContentsController@TesteInput')->name('dashboard.TesteInput');
     Route::get('/dashboard/products','App\Http\Controllers\ContentsController@products')->name('dashboard.products');
    Route::get('/dashboard/GerarDeclaracao', 'App\Http\Controllers\DashBoardController@GerarDeclaracao')->name('dashboard.GerarDeclaracao');
    Route::get('/dashboard/download/{declaracao}','App\Http\Controllers\ContentsController@download')->name('dashboard.download');
    
    
  
    });

Route::group(['middleware' => ['auth', 'role:admin']], function(){
   
    Route::get('/dashboard/Historico','App\Http\Controllers\ContentsController@Historico' )->name('dashboard.Historico');
    //Route::get('/dashboard/teste','App\Http\Controllers\ContentsController@teste' )->name('dashboard.teste');
    Route::post('/dashboard/index_pdf','App\Http\Controllers\PdfController@CDF' )->name('dashboard.index_pdf');
    //Route::post('/dashboard/store','App\Http\Controllers\AssetsController@store' )->name('dashboard.store');
    Route::get('/dashboard/getPDF','App\Http\Controllers\PdfController@getPDF')->name('dashboard.getPDF');

    Route::get('/dashboard/pdfview','App\Http\Controllers\PdfController@pdfview')->name('dashboard.pdfview');


   
});







require __DIR__.'/auth.php';