<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\evaluasi;
use Illuminate\Support\Facades\Http;

class EvaluasiController extends Controller
{
    public function evaluasiPembelajaran(){
        $response = Http::get('http://api.stmik-bandung.ac.id:16080/apiserver/api/kurikulum');
        $data = $response->json();
        $semester1 = $data["semester1"];
        $semester2 = $data["semester2"];
        $semester3 = $data["semester3"];
        $semester4 = $data["semester4"];
        $semester5 = $data["semester5"];
        $semester6 = $data["semester6"];
        $semester7 = $data["semester7"];
        $semester8 = $data["semester8"];
        $datas = $semester1 + $semester2 + $semester3 + $semester4 + $semester5 + $semester6 + $semester7 + $semester8;
        // dd($datas);
        // $json = json_encode($datas);
        // dd($json);
        return view('evaluasi.evaluasipembelajaran', compact('datas'));
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
