<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\EvaluasiController;
use App\Models\sidebars;
use Hashids\Hashids;
use Illuminate\Support\Facades\Hash;

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

$matakuliah = '619332782';
$jadwalmatakuliah = '235789234';
$tujuandancapaian = '793146080';

$myprofile = '347892345';
$status = '217946695';
$jadwalperkuliahan = '217089231';
$pengkiniandata = '231708349';
$statuskeuangan = '217946690';
$transkripnilai = '672349845';

$evaluasi1 = '132445657';
$evaluasi2 = '890763428';
$evaluasi3 = '435677898';

// $hashids = new Hashids();

$matakuliah = $hashids->encode($matakuliah);
$jadwalmatakuliah = $hashids->encode($jadwalmatakuliah);
$tujuandancapaian = $hashids->encode($tujuandancapaian);

$myprofile = $hashids->encode($myprofile);
$status = $hashids->encode($status);
$jadwalperkuliahan = $hashids->encode($jadwalperkuliahan);
$pengkiniandata = $hashids->encode($pengkiniandata);
$statuskeuangan = $hashids->encode($statuskeuangan);
$transkripnilai = $hashids->encode($transkripnilai);

$evaluasi1 = $hashids->encode($evaluasi1);
$evaluasi2 = $hashids->encode($evaluasi2);
$evaluasi3 = $hashids->encode($evaluasi3);

Route::get('/', function () {
    return view('v_home');
});
Route::get('/kurikulum/'. $matakuliah, [MatakuliahController::class,'matakuliah'])->name('MatakuliahIndex');
Route::get('/kurikulum/'. $jadwalmatakuliah, [MatakuliahController::class,'jadwalMatakuliah'])->name('JadwalMatakuliahIndex');
Route::get('/kurikulum/'. $tujuandancapaian, [MatakuliahController::class,'tujuanCapaian'])->name('TujuanCapaianIndex');

Route::get('/mahasiswa/'. $myprofile, [MahasiswaController::class,'myprofile'])->name('myprofile');
Route::get('/mahasiswa/'. $status, [MahasiswaController::class,'status'])->name('statusIndex');
Route::get('/mahasiswa/'. $jadwalperkuliahan, [MahasiswaController::class,'jadwalKuliah'])->name('jadwalkuliahIndex');
Route::get('/mahasiswa/'. $pengkiniandata, [MahasiswaController::class,'dataindukmahasiswa'])->name('datamahasiswaIndex');
Route::get('/mahasiswa/'. $statuskeuangan, [MahasiswaController::class,'statusKeuangan'])->name('statuskeuanganIndex');
Route::get('/mahasiswa/'. $transkripnilai, [MahasiswaController::class,'transkripNilai'])->name('transkripnilaiIndex');

Route::get('/evaluasi/'. $evaluasi1, [EvaluasiController::class,'evaluasiPembelajaran'])->name('evaluasipembelajaranIndex');
Route::get('/evaluasi/'. $evaluasi2, [EvaluasiController::class,'evaluasiSarana'])->name('evaluasipengelolaanIndex');
Route::get('/evaluasi/'. $evaluasi3, [EvaluasiController::class,'evaluasiKeuangan'])->name('evaluasisaranaIndex');

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa/layouts/index');
// });