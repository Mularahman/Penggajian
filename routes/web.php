<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PotonganController;
use App\Http\Controllers\TunjanganController;

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
Route::get('/', [Controller::class, 'login']);
Route::get('/home', [Controller::class, 'login']);
Route::get('/login', [Controller::class, 'login']);
Route::post('/login_aksi', [Controller::class, 'logins']);
Route::post('/logout', [Controller::class, 'logout']);


Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', [Controller::class, 'index']);

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

    Route::get('/data_tunjangan', [TunjanganController::class, 'index']);
    Route::post('/tambahtunjangan', [TunjanganController::class, 'store']);
    Route::post('/edittunjangan/{id}', [TunjanganController::class,'edit']);
    Route::put('/updatetunjangan/{id}', [TunjanganController::class,'update']);
    Route::delete('/hapustunjangan/{id}', [TunjanganController::class,'destroy']);

    Route::get('/jenis_potongan', [PotonganController::class, 'index']);
    Route::post('/tambahpotongan', [PotonganController::class, 'store']);
    Route::post('/editpotongan/{id}', [PotonganController::class,'edit']);
    Route::put('/updatepotongan/{id}', [PotonganController::class,'update']);
    Route::delete('/hapuspotongan/{id}', [PotonganController::class,'destroy']);

    Route::get('/data_absensi', [AbsensiController::class, 'index']);
    Route::post('/data_absensii', [AbsensiController::class, 'filter']);
    Route::get('/tambah_absensi/{id}/{bulan}', [AbsensiController::class, 'tambah']);
    Route::post('/tambahabsensi/{id}', [AbsensiController::class, 'store']);
    Route::post('/editabsensi/{id}', [AbsensiController::class,'edit']);
    Route::put('/updateabsensi/{id}', [AbsensiController::class,'update']);
    Route::delete('/hapusabsensi/{id}', [AbsensiController::class,'destroy']);

    Route::get('/data_gaji', [GajiController::class, 'index']);
    Route::post('/data_gajii', [GajiController::class, 'filter']);
    Route::get('/tambah_gaji/{id}/{bulan}', [GajiController::class, 'tambah']);
    Route::post('/tambah_gaji/{id}', [GajiController::class, 'store']);
    Route::get('/lihat_gaji/{id}/{bulan}', [GajiController::class, 'lihat']);

    Route::get('/laporan_pegawai', [LaporanController::class, 'pegawai']);
    Route::get('/laporan_pegawai_cetak', [LaporanController::class, 'cetak_pegawai']);

    Route::get('/laporan_gaji', [LaporanController::class, 'gaji']);
    Route::post('/laporan_gajii', [LaporanController::class, 'filter_gaji']);
    Route::get('/laporan_gaji_cetak/{bulan}', [LaporanController::class, 'cetak_gaji']);

    Route::get('/laporan_absensi', [LaporanController::class, 'absensi']);
    Route::post('/laporan_absensii', [LaporanController::class, 'filter_absensi']);
    Route::get('/laporan_absensi_cetak/{bulan}', [LaporanController::class, 'cetak_absensi']);

    Route::get('/laporan_slipgaji', [LaporanController::class, 'pilihpegawai']);
    Route::post('/laporan_slipgajii', [LaporanController::class, 'slipgaji']);
    Route::get('/laporan_slipgaji_cetak/{id}/{bulan}', [LaporanController::class, 'cetak_slipgaji']);

});
