<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Livewire\Admin\UserManagement;
use App\Http\Livewire\Berkas\Berkas;
use App\Http\Livewire\Berkas\InputBerkas;
use App\Http\Livewire\Pemohon\AddPengajuan;
use App\Http\Livewire\Pemohon\Pengajuan;

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
    return redirect('/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'cekRole:admin']], function(){
    Route::get('/index', [AdminController::class, 'index'])->name('admin');
    Route::get('/user-management', UserManagement::class)->name('user-management');
    Route::post('/tambahadmin', [AdminController::class, 'store'])->name('tambahadmin');
    Route::post('/ubahadmin/{id}', [AdminController::class, 'updateadmin']);
    Route::get('/hapus/{id}', [AdminController::class, 'hapus'])->name('hapus');
    Route::get('/riwayat', [AdminController::class, 'riwayat'])->name('riwayat-admin');
});

Route::group(['prefix'=>'pemohon', 'middleware'=>['auth', 'cekRole:pemohon']], function(){
    Route::get('/index', [PemohonController::class, 'index'])->name('pemohon');
    Route::get('/pengajuan', AddPengajuan::class)->name('pengajuan-pemohon');
    Route::get('/list-pengajuan', [PemohonController::class, 'list'])->name('list-pengajuan');
    Route::get('/riwayat', [PemohonController::class, 'riwayat'])->name('riwayat-pemohon');
});

Route::group(['prefix'=>'berkas', 'middleware'=>['auth', 'cekRole:verifikator berkas']], function(){
    Route::get('/index', [BerkasController::class, 'index'])->name('berkas');
    Route::get('/pengajuan', [BerkasController::class, 'pengajuan'])->name('pengajuan-berkas');
    Route::get('/view-berkas', [BerkasController::class, 'view'])->name('view-berkas');
    Route::get('/input-berkas', InputBerkas::class)->name('input-berkas');
});
Route::group(['prefix'=>'lapangan', 'middleware'=>['auth', 'cekRole:verifikator lapangan']], function(){
    Route::get('/index', [LapanganController::class, 'index'])->name('lapangan');
    Route::get('/pengajuan', [LapanganController::class, 'pengajuan'])->name('pengajuan-lapangan');
});
Route::group(['prefix'=>'rekomendasi', 'middleware'=>['auth', 'cekRole:pemberi rekomendasi']], function(){
    Route::get('/index', [RekomendasiController::class, 'index'])->name('rekomendasi');
    Route::get('/pengajuan', [RekomendasiController::class, 'pengajuan'])->name('pengajuan-rekomendasi');
    Route::get('/surat-rekomendasi', [RekomendasiController::class, 'surat'])->name('surat-rekomendasi');

});
