<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\Datatables\Datatables;
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

    public function status(Request $request){
        if ($request->ajax()) {
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/mahasiswa/jadwal/1219010');
            $data = $response->json();
            $datas = $data['data'];
            return DataTables::of($datas)
                ->addIndexColumn()
                ->make(true);
        }
        return view('mahasiswa.status'); 
    }
    public function jadwalKuliah(Request $request){
        if ($request->ajax()) {
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/mahasiswa/jadwal/1219010');
            $data = $response->json();
            $datas = $data['data'];
            return DataTables::of($datas)
                ->addIndexColumn()
                ->make(true);
        }
        return view('mahasiswa.jadwalKuliah'); 
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
