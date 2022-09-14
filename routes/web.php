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

//rota para os dois usuários
Route::group(['middleware' => ['auth']], function(){
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/GerarDeclaracao', 'App\Http\Controllers\DashBoardController@GerarDeclaracao')->name('dashboard.GerarDeclaracao');

});
require __DIR__.'/auth.php';

