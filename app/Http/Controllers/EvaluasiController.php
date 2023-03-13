<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function evaluasiPembelajaran(){

        return view('evaluasi.evaluasipembelajaran'); 
    }
    public function evaluasiSarana(){

        return view('evaluasi.evaluasisarana'); 
    }
    public function evaluasiKeuangan(){

        return view('evaluasi.evaluasikeuangan'); 
    }
}
