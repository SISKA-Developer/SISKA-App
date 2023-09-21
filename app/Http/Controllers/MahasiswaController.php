<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\Datatables\Datatables;
use App\Models\fotoprofil;
use Illuminate\Support\Facades\Hash;
use Hashids\Hashids;

class MahasiswaController extends Controller
{
    // public function index(){
    //     return view('mahasiswa.myprofile');
    // }

    public function myprofile(Request $request){
        // dd($request->session()->all());
        return view('mahasiswa.myprofile');

    }

    public function status(Request $request){
        if ($request->ajax()) {
            $nim = $request->session()->get("nim");
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/apiserver/api/mahasiswa/jadwal/'.$nim);
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
            $nim = $request->session()->get("nim");
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/apiserver/api/mahasiswa/jadwal/'.$nim);
            $data = $response->json();
            // dd($data);
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
    public function transkripnilaiAPI(Request $request){
        if ($request->ajax()) {
            $nim = $request->session()->get("nim");
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/apiserver/api/mahasiswa/nilai/'.$nim);
            $data = $response->json();
            // dd($data);
            $datas = $data['data'];
            return DataTables::of($datas)
                ->addIndexColumn()
                ->make(true);
        }
        return view('mahasiswa.transkripnilai');
    }

        public function transkripNilai(Request $request){

            return view('mahasiswa.transkripnilai');
    }
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nim'     => 'required|min:5',
            'keterangan'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/foto_profile', $image->hashName());
        dd($request);

        //create post
        fotoprofil::create([
            'image'     => $image->hashName(),
            'nim'     => $request->nim,
            'keterangan'   => $request->keterangan
        ]);

        //redirect to index
        return redirect()->route('mahasiswa.myprofile')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
