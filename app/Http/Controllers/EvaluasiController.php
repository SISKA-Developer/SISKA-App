<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\evaluasi;

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

    public function store(Request $request)
    {
        // dd($request);
            evaluasi::create([
                'nama_tabel'     => $request->nama_tabel,
                'mk_id'     => $request->mk_id,
                'p1'   => $request->p1,
                'p2'   => $request->p2,
                'p3'   => $request->p3,
                'p4'   => $request->p4,
                'p5'   => $request->p5,
                'p6'   => $request->p6,
                'p7'   => $request->p7,
                'p8'   => $request->p8,
                'p9'   => $request->p9,
                'catatan'   => $request->catatan,
            ]);
            return redirect()->route('evaluasipengelolaanIndex')->with(['success' => 'Data Berhasil Disimpan!']);
    }
  
}
