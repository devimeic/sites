<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Livewire\Admin\Riwayat;
use App\Http\Livewire\Admin\ShowRiwayat;
use App\Http\Livewire\Admin\UserManagement;
use App\Http\Livewire\Berkas\Berkas;
use App\Http\Livewire\Berkas\InputBerkas;
use App\Http\Livewire\Berkas\ListPengajuan;
use App\Http\Livewire\Berkas\Pengajuan as BerkasPengajuan;
use App\Http\Livewire\Berkas\ShowList as BerkasShowList;
use App\Http\Livewire\Lapangan\ListPengajuan as LapanganListPengajuan;
use App\Http\Livewire\Lapangan\ShowBerkas;
use App\Http\Livewire\Pemohon\AddPengajuan;
use App\Http\Livewire\Pemohon\Pengajuan;
use App\Http\Livewire\Pemohon\RevisiLapangan;
use App\Http\Livewire\Pemohon\Riwayat as PemohonRiwayat;
use App\Http\Livewire\Pemohon\ShowDraft;
use App\Http\Livewire\Pemohon\ShowList;
use App\Http\Livewire\Pemohon\ShowRevisi;
use App\Http\Livewire\Pemohon\ShowRiwayat as PemohonShowRiwayat;

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
    Route::get('/riwayat', Riwayat::class)->name('riwayat-admin');
    Route::get('/show-riwayat/{id}', ShowRiwayat::class)->name('show-admin');
});

Route::group(['prefix'=>'pemohon', 'middleware'=>['auth', 'cekRole:pemohon']], function(){
    Route::get('/index', [PemohonController::class, 'index'])->name('pemohon');
    Route::get('/pengajuan', AddPengajuan::class)->name('pengajuan-pemohon');
    Route::get('/show-draft/{id}', ShowDraft::class)->name('show-draft');
    Route::get('/list-pengajuan', [PemohonController::class, 'list'])->name('list-pengajuan');
    // Route::get('/riwayat', [PemohonController::class, 'riwayat'])->name('riwayat-pemohon');
    Route::get('/riwayat', PemohonRiwayat::class)->name('riwayat-pemohon');
    Route::get('/show-riwayat/{id}', PemohonShowRiwayat::class)->name('show-pemohon');
    Route::get('/revisi-berkas/{id}', ShowRevisi::class)->name('revisi-berkas');
    Route::get('/revisi-lapangan/{id}', RevisiLapangan::class)->name('revisi-lapangan');
});

Route::group(['prefix'=>'berkas', 'middleware'=>['auth', 'cekRole:verifikator berkas']], function(){
    Route::get('/index', [BerkasController::class, 'index'])->name('berkas');
    // Route::get('/pengajuan', [BerkasController::class, 'pengajuan'])->name('pengajuan-berkas');
    Route::get('/pengajuan', ListPengajuan::class)->name('pengajuan-berkas');
    // Route::get('/view-berkas', [BerkasController::class, 'view'])->name('view-berkas');
    Route::get('/show-list/{id}', BerkasShowList::class)->name('show-berkas');
    Route::get('/input-berkas', InputBerkas::class)->name('input-berkas');
});
Route::group(['prefix'=>'lapangan', 'middleware'=>['auth', 'cekRole:verifikator lapangan']], function(){
    Route::get('/index', [LapanganController::class, 'index'])->name('lapangan');
    Route::get('/pengajuan', LapanganListPengajuan::class)->name('pengajuan-lapangan');
    Route::get('/show-berkas/{id}', ShowBerkas::class)->name('show-lapangan');
});
Route::group(['prefix'=>'rekomendasi', 'middleware'=>['auth', 'cekRole:pemberi rekomendasi']], function(){
    Route::get('/index', [RekomendasiController::class, 'index'])->name('rekomendasi');
    Route::get('/pengajuan', [RekomendasiController::class, 'pengajuan'])->name('pengajuan-rekomendasi');
    Route::get('/surat-rekomendasi', [RekomendasiController::class, 'surat'])->name('surat-rekomendasi');

});
