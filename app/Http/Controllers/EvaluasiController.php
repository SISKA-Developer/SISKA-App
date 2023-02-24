<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function evaluasiPembelajaran(){

        return view('mahasiswa.myprofile'); 
    }
    public function evaluasiSarana(){

        return view('mahasiswa.myprofile'); 
    }
    public function evaluasiKeuangan(){

        return view('mahasiswa.myprofile'); 
    }
}
