<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\evaluasi;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

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
        $genap = $semester2 + $semester4 + $semester6 + $semester8;
        $datas = $semester1 + $semester3 + $semester5 + $semester7;
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
    public function evaluasiadminapi(){
        $data = evaluasi::select('mk_id')
            ->selectRaw('SUM(p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8) as total_nilai')
            ->whereBetween('p1', [1, 5])
            ->whereBetween('p2', [1, 5])
            ->whereBetween('p3', [1, 5])
            ->whereBetween('p4', [1, 5])
            ->whereBetween('p5', [1, 5])
            ->whereBetween('p6', [1, 5])
            ->whereBetween('p7', [1, 5])
            ->groupBy('mk_id')
            ->get();

                // Inisialisasi array untuk menyimpan data hasil penggabungan
            $combinedData = [];

            // Iterasi melalui data yang diambil dari database
            foreach ($data as $row) {
                $mk_id = $row->mk_id;

                // Jika data dengan mk_id yang sama sudah ada dalam $combinedData, tambahkan total_nilai
                if (isset($combinedData[$mk_id])) {
                    $combinedData[$mk_id]->total_nilai += $row->total_nilai;
                } else {
                    // Jika belum ada data dengan mk_id yang sama, tambahkan data baru ke $combinedData
                    $combinedData[$mk_id] = $row;
                }
            }

            // Konversi array hasil penggabungan menjadi array numerik
            $combinedData = array_values($combinedData);

            // Kembalikan data yang sudah digabungkan
            return DataTables::of($combinedData)
                ->addIndexColumn()
                ->make(true);

        // return view('kurikulum.kurikulum');
    }
    public function evaluasiadmin(){

    return view('evaluasi.evaluasiadmin');
    }

    public function evaluasisaranaadmin()
    {
        $data = evaluasi::select('nama_tabel', 'p1', 'p2', 'p3', 'p4', 'p5', 'catatan')
            ->where('nama_tabel', 'evaluasi')
            ->get();

        foreach ($data as $item) {
            // Menghitung total nilai dari p1 sampai p5
            $totalNilai = $item->p1 + $item->p2 + $item->p3 + $item->p4 + $item->p5;
            $item->total_nilai = $totalNilai;
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    public function evaluasikeuanganadmin(){
        $data = evaluasi::select('nama_tabel', 'p1', 'p2', 'p3', 'p4', 'p5', 'catatan')
        ->where('nama_tabel', 'keuangan')
        ->get();

    foreach ($data as $item) {
        // Menghitung total nilai dari p1 sampai p5
        $totalNilai = $item->p1 + $item->p2 + $item->p3 + $item->p4 + $item->p5;
        $item->total_nilai = $totalNilai;
    }

    return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
}

