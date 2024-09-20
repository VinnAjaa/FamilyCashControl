<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Models\PengeluaranModel;
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


Route::get('/', function() {
    return view('home');
});





//Pemasukan
Route::get('/income',[PemasukanController::class,'tambah']);
Route::post('/income', [PemasukanController::class, 'create']);
Route::post('/income/delete/{id}', [PemasukanController::class, 'delete']);
Route::get('/income/update/{id}', [PemasukanController::class, 'viewupdate']);
Route::post('/income/update/{id}', [PemasukanController::class, 'update']);
// Pengeluara
Route::get('expense', function(){
    return view ('expense');
});
Route::post('/expense', [PengeluaranController::class,'create']);
Route::post('/expense/delete/{id}',[PengeluaranController::class,'hapus']);
Route::get('/expense/update/{id}', [PengeluaranController::class, 'viewupdate']);
Route::post('/expense/update/{id}',[PengeluaranController::class,'update']);

//Login
Route::get('/login',function() {
    return view('login');
});
Route::post('/proseslogin', [LoginController::class,'login']);
Route::get('/logout', [LoginController::class,'logout']);
//Dashboard

Route::get('/dashboard',[PemasukanController::class, "view"]);
