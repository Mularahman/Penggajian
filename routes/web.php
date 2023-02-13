<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PotonganController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Controller::class, 'index']);

Route::get('/data_pegawai', [PegawaiController::class, 'index']);
Route::post('/tambahpegawai', [PegawaiController::class, 'store']);
Route::post('/editpegawai/{id}', [PegawaiController::class,'edit']);
Route::put('/updatepegawai/{id}', [PegawaiController::class,'update']);
Route::delete('/hapuspegawai/{id}', [PegawaiController::class,'destroy']);

Route::get('/data_jabatan', [JabatanController::class, 'index']);
Route::post('/tambahjabatan', [JabatanController::class, 'store']);
Route::post('/editjabatan/{id}', [JabatanController::class,'edit']);
Route::put('/updatejabatan/{id}', [JabatanController::class,'update']);
Route::delete('/hapusjabatan/{id}', [JabatanController::class,'destroy']);

Route::get('/jenis_potongan', [PotonganController::class, 'index']);
Route::post('/tambahpotongan', [PotonganController::class, 'store']);
Route::post('/editpotongan/{id}', [PotonganController::class,'edit']);
Route::put('/updatepotongan/{id}', [PotonganController::class,'update']);
Route::delete('/hapuspotongan/{id}', [PotonganController::class,'destroy']);

Route::get('/data_absensi', [AbsensiController::class, 'index']);
Route::get('/tambah_absensi', [AbsensiController::class, 'tambah']);
Route::post('/tambahabsensi', [AbsensiController::class, 'store']);
Route::post('/editabsensi/{id}', [AbsensiController::class,'edit']);
Route::put('/updateabsensi/{id}', [AbsensiController::class,'update']);
Route::delete('/hapusabsensi/{id}', [AbsensiController::class,'destroy']);
