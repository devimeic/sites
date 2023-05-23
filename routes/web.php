<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\OtpController;
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
use App\Http\Livewire\Lapangan\ListRapat;
use App\Http\Livewire\Lapangan\ShowBerkas;
use App\Http\Livewire\Pemohon\AddPengajuan;
use App\Http\Livewire\Pemohon\Laporan;
use App\Http\Livewire\Pemohon\Pengajuan;
use App\Http\Livewire\Pemohon\RevisiLapangan;
use App\Http\Livewire\Pemohon\Riwayat as PemohonRiwayat;
use App\Http\Livewire\Pemohon\ShowDraft;
use App\Http\Livewire\Pemohon\ShowList;
use App\Http\Livewire\Pemohon\ShowRevisi;
use App\Http\Livewire\Pemohon\ShowRiwayat as PemohonShowRiwayat;
use App\Http\Livewire\Profil;
use App\Http\Livewire\Rekomendasi\Pengajuan as RekomendasiPengajuan;
use App\Http\Livewire\Rekomendasi\UploadSurat;

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
Route::get('/profil', Profil::class)->middleware('auth')->name('profil');
Route::get('/otp/{id}', [RegisterController::class, 'indexotp'])->name('otp');
Route::any('/otpkirim', [RegisterController::class, 'kirimotp'])->name('kirim-otp');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'cekRole:admin']], function(){
    Route::get('/index', [AdminController::class, 'index'])->name('admin');
    Route::get('/wa-gateway', [AdminController::class, 'wa'])->name('wa');
    Route::get('/user-management', UserManagement::class)->name('user-management');
    Route::get('/riwayat', Riwayat::class)->name('riwayat-admin');
    Route::get('/show-riwayat/{id}', ShowRiwayat::class)->name('show-admin');
    // Route::get('/profil', Profil::class)->name('profil-admin');
    // Route::get('/edit', [App\Http\Controllers\HomeController::class, 'editprofil'])->name('edit-profil-admin');
    // Route::get('/edit-password', [App\Http\Controllers\HomeController::class, 'editpassword'])->name('edit-password-admin');
});

Route::group(['prefix'=>'pemohon', 'middleware'=>['auth', 'cekRole:pemohon']], function(){
    Route::get('/index', [PemohonController::class, 'index'])->name('pemohon');
    Route::get('/pengajuan', AddPengajuan::class)->name('pengajuan-pemohon');
    Route::get('/show-draft/{id}', ShowDraft::class)->name('show-draft');
    Route::get('/list-pengajuan', [PemohonController::class, 'list'])->name('list-pengajuan');
    // Route::get('/riwayat', [PemohonController::class, 'riwayat'])->name('riwayat-pemohon');
    Route::get('/riwayat', PemohonRiwayat::class)->name('riwayat-pemohon');
    Route::get('/laporan', Laporan::class)->name('laporan-pemohon');
    Route::get('/show-riwayat/{id}', PemohonShowRiwayat::class)->name('show-pemohon');
    Route::get('/show-laporan/{id}', PemohonShowRiwayat::class)->name('show-laporan');
    Route::get('/revisi-berkas/{id}', ShowRevisi::class)->name('revisi-berkas');
    Route::get('/revisi-lapangan/{id}', RevisiLapangan::class)->name('revisi-lapangan');
    // Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil-pemohon');
    // Route::get('/edit', [App\Http\Controllers\HomeController::class, 'editprofil'])->name('edit-profil-pemohon');
    // Route::get('/edit-password', [App\Http\Controllers\HomeController::class, 'editpassword'])->name('edit-password-pemohon');
    // Route::get('/profil', Profil::class)->name('profil-pemohon');

});

Route::group(['prefix'=>'berkas', 'middleware'=>['auth', 'cekRole:verifikator berkas']], function(){
    Route::get('/index', [BerkasController::class, 'index'])->name('berkas');
    // Route::get('/pengajuan', [BerkasController::class, 'pengajuan'])->name('pengajuan-berkas');
    Route::get('/pengajuan', ListPengajuan::class)->name('pengajuan-berkas');
    // Route::get('/view-berkas', [BerkasController::class, 'view'])->name('view-berkas');
    Route::get('/show-list/{id}', BerkasShowList::class)->name('show-berkas');
    Route::get('/input-berkas', InputBerkas::class)->name('input-berkas');
    // Route::get('/profil', Profil::class)->name('profil-berkas');
    // Route::get('/edit', [App\Http\Controllers\HomeController::class, 'editprofil'])->name('edit-profil-berkas');
    // Route::get('/edit-password', [App\Http\Controllers\HomeController::class, 'editpassword'])->name('edit-password-berkas');

});
Route::group(['prefix'=>'lapangan', 'middleware'=>['auth', 'cekRole:verifikator lapangan']], function(){
    Route::get('/index', [LapanganController::class, 'index'])->name('lapangan');
    Route::get('/pengajuan', LapanganListPengajuan::class)->name('pengajuan-lapangan');
    Route::get('/show-berkas/{id}', ShowBerkas::class)->name('show-lapangan');
    Route::get('/list-rapat', ListRapat::class)->name('rapat');
    // Route::get('/profil', Profil::class)->name('profil-lapangan');
    // Route::get('/edit', [App\Http\Controllers\HomeController::class, 'editprofil'])->name('edit-profil-lapangan');
    // Route::get('/edit-password', [App\Http\Controllers\HomeController::class, 'editpassword'])->name('edit-password-lapangan');

});
Route::group(['prefix'=>'rekomendasi', 'middleware'=>['auth', 'cekRole:pemberi rekomendasi']], function(){
    Route::get('/index', [RekomendasiController::class, 'index'])->name('rekomendasi');
    // Route::get('/pengajuan', [RekomendasiController::class, 'pengajuan'])->name('pengajuan-rekomendasi');
    Route::get('/pengajuan', RekomendasiPengajuan::class)->name('pengajuan-rekomendasi');
    Route::get('/upload-surat/{id}', UploadSurat::class)->name('upload');
    Route::get('/surat-rekomendasi', [RekomendasiController::class, 'surat'])->name('surat-rekomendasi');
    // Route::get('/profil', Profil::class)->name('profil-rekomendasi');
    // Route::get('/edit', [App\Http\Controllers\HomeController::class, 'editprofil'])->name('edit-profil-rekomendasi');
    // Route::get('/edit-password', [App\Http\Controllers\HomeController::class, 'editpassword'])->name('edit-password-rekomendasi');


});

Route::any('/deletenotif/{id}',[HomeController::class,'deleteNotif'])->middleware('auth')->name('deleteNotif');
Route::any('/alldeletenotif',[HomeController::class,'alldelete'])->middleware('auth')->name('alldelete');
