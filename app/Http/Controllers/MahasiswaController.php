<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Hashids\Hashids;


class MahasiswaController extends Controller
{
    // public function index(){
    //     return view('mahasiswa.myprofile'); 
    // }
    public function myprofile(){

        return view('mahasiswa.myprofile'); 
    }
    public function status(){

        return view('mahasiswa.status'); 
    }
    public function jadwalKuliah(){

        return view('mahasiswa.jadwalkuliah'); 
    }
    public function dataindukmahasiswa(){

        return view('mahasiswa.dataindukmahasiswa'); 
    }
    public function statusKeuangan(){

        return view('mahasiswa.statuskeuangan'); 
    }
    public function transkripNilai(){

        return view('mahasiswa.transkripnilai'); 
    }
}
