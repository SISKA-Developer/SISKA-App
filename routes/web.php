<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\SSOController;
// use App\Models\sidebars;
use Hashids\Hashids;
// use Illuminate\Http\Request;
// use Cookie;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

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

$hashids = new Hashids();

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
// $request = new Request();
// $token = Cookie::get('siska_session');
 
// Get the currently authenticated user...
// $user = Auth::user();
// dd($user);
// dd($user);
 
// Get the currently authenticated user's ID...
// $id = Auth::id();
    // if(!$token){
    //     Route::get('/', function () {
    //         return view('v_home');
    //     })->middleware('auth');
        
    //     Route::get('/login', function(){
    //         return redirect('http://sso.stmikbandung.test/login');
    //     })->name('login');
        
    // }else{


    Route::get('/login', [SSOController::class,'getlogin'])->name('login');

    Route::get('/callback', [SSOController::class,'getcallback'])->name('callback');

    Route::get('/authuser', [SSOController::class,'getuser'])->name('authuser');

    Route::get('/logout', function(){
        return redirect('http://sso.stmikbandung.test/logout');
    })->name('logout');

    Route::get('/', function () {
        return view('v_home');
    });
    
    Route::get('/kurikulum', function (Request $request) {
    $token = $request->session()->get("access_token"); 
        if(!$token){
            $request->session()->push('halaman', 'kurikulum');
            return redirect(route('login'));
        }else{
            return redirect(route('MatakuliahIndex'));
        }
    });
    Route::get('/mahasiswa', function (Request $request) {
    $token = $request->session()->get("access_token"); 
        if(!$token){
            $request->session()->push('halaman', 'mahasiswa');
            return redirect(route('login'));
        }else{
        return redirect(route('myprofile'));
        }
    });    
    Route::get('/evaluasi', function (Request $request) {
    $token = $request->session()->get("access_token"); 
        if(!$token){
            $request->session()->push('halaman', 'evaluasi');
            return redirect(route('login'));
        }else{
            return redirect(route('evaluasipembelajaranIndex'));
            }
        });

    //admin
    Route::get('/kurikulum/'. $matakuliah, [MatakuliahController::class,'matakuliah'])->name('MatakuliahIndex');
    Route::get('/kurikulum/'. $jadwalmatakuliah, [MatakuliahController::class,'jadwalMatakuliah'])->name('JadwalMatakuliahIndex');
    Route::get('/kurikulum/'. $tujuandancapaian, [MatakuliahController::class,'tujuanCapaian'])->name('TujuanCapaianIndex');

    Route::get('matakuliahsmt1', [MatakuliahController::class,'getmatakuliahsmt1'])->name('getmatakuliahsmt1');
    Route::get('matakuliahsmt2', [MatakuliahController::class,'getmatakuliahsmt2'])->name('getmatakuliahsmt2');
    Route::get('matakuliahsmt3', [MatakuliahController::class,'getmatakuliahsmt3'])->name('getmatakuliahsmt3');
    Route::get('matakuliahsmt4', [MatakuliahController::class,'getmatakuliahsmt4'])->name('getmatakuliahsmt4');
    Route::get('matakuliahsmt5', [MatakuliahController::class,'getmatakuliahsmt5'])->name('getmatakuliahsmt5');
    Route::get('matakuliahsmt6', [MatakuliahController::class,'getmatakuliahsmt6'])->name('getmatakuliahsmt6');
    Route::get('matakuliahsmt7', [MatakuliahController::class,'getmatakuliahsmt7'])->name('getmatakuliahsmt7');
    Route::get('matakuliahsmt8', [MatakuliahController::class,'getmatakuliahsmt8'])->name('getmatakuliahsmt8');
    Route::get('getjadwalmatakuliah', [MatakuliahController::class,'getjadwalmatakuliah'])->name('getjadwalmatakuliah');
    Route::post('filetujuanCapaian', [MatakuliahController::class, 'filetujuanCapaian']);
    Route::post('fileSilabus', [MatakuliahController::class, 'fileSilabus']);


    Route::get('/mahasiswa/'. $myprofile, [MahasiswaController::class,'myprofile'])->name('myprofile');
    Route::get('/mahasiswa/'. $status, [MahasiswaController::class,'status'])->name('statusIndex');
    Route::get('/mahasiswa/'. $jadwalperkuliahan, [MahasiswaController::class,'jadwalKuliah'])->name('jadwalkuliahIndex');
    Route::get('/mahasiswa/'. $pengkiniandata, [MahasiswaController::class,'dataindukmahasiswa'])->name('datamahasiswaIndex');
    Route::get('/mahasiswa/'. $statuskeuangan, [MahasiswaController::class,'statusKeuangan'])->name('statuskeuanganIndex');
    Route::get('/mahasiswa/'. $transkripnilai, [MahasiswaController::class,'transkripNilai'])->name('transkripnilaiIndex');

    Route::get('/evaluasi/'. $evaluasi1, [EvaluasiController::class,'evaluasiPembelajaran'])->name('evaluasipembelajaranIndex');
    Route::get('/evaluasi/'. $evaluasi2, [EvaluasiController::class,'evaluasiSarana'])->name('evaluasipengelolaanIndex');
    Route::get('/evaluasi/'. $evaluasi3, [EvaluasiController::class,'evaluasiKeuangan'])->name('evaluasisaranaIndex');

    //for displaying PDF
    Route::get('/display/{mk_id}',[pdfController::class,'getSilabus']);

    // }

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa/layouts/index');
// });