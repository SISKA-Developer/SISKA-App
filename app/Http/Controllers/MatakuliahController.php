<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;
use Hashids\Hashids;
use App\Models\matakuliah;
use Yajra\Datatables\CollectionDataTable;
use App\Models\linktujuancapaian;
use App\Models\linkSilabus;
use Illuminate\Support\Facades\Storage;
use Facade\FlareClient\Http\Response;

class MatakuliahController extends Controller
{

    public function matakuliah(){

        $data = linkSilabus::all();
        // $data = json_encode($blogs);
        // dd($data);
        return view('kurikulum.matakuliah',compact('data'));
    }
    public function index(){
        $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah');
        // $response = Http::get('http://api.stmik-bandung.ac.id:16080/apiserver/api/kurikulum');
        // $response = Http::get('https://holyhos.hasura.app/api/rest/patient');
            $data = $response->json();
            dd($data);

            return view('kurikulum.matakuliah');
    }
    public function getmatakuliahall (){

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
        return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);

        // return $datas;

    }

        public function getmatakuliahsmt1(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/1');
                $data = $response->json();
                $datas = $data['data'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');
        }

        public function getmatakuliahsmt2(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/2');
                $data = $response->json();
                $datas = $data['data'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');
        }
        public function getmatakuliahsmt3(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/3');
                $data = $response->json();
                $datas = $data['data'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');
        }
        public function getmatakuliahsmt4(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/4');
                $data = $response->json();
                $datas = $data['data'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');
        }
        public function getmatakuliahsmt5(Request $request){
                    if ($request->ajax()) {
                        $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/5');
                        $data = $response->json();
                        $datas = $data['data'];
                        return DataTables::of($datas)
                            ->addIndexColumn()
                            ->make(true);
                    }
                    return view('kurikulum.kurikulum');
        }

        public function getmatakuliahsmt6(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/6');
                $data = $response->json();
                $datas = $data['data'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');
        }
        public function getmatakuliahsmt7(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/7');
                $data = $response->json();
                $datas = $data['data'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');
        }

        public function getmatakuliahsmt8(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmikbandung.test:82/api/matakuliah/semester/8');
                $data = $response->json();
                $datas = $data['data'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');
        }
    public function fileSilabus(Request $request)
        {
            $this->validate($request, [
                'link'     => 'required|mimes:csv,txt,xlx,xls,pdf|max:4048',
                'keterangan' => 'required',
                'kode_mk'   => 'required'
            ]);
            // //get data Blog by ID
            // $blog = linkSilabus::findOrFail($request->kd_mk);

            // if($request->file('link') == "") {
                // upload image
                // $nama = $request->kode_mk;
            $nama = $request->file('link')->getClientOriginalName();
            $image = $request->file('link');
            // $request->file('file')->store('public/files');
            $image->store('public/data_file', $nama );

            $blog = linkSilabus::create([
                'link'     => $nama,
                'keterangan' => $request->keterangan,
                'kd_mk'   => $request->kode_mk
            ]);
            // } else {
            //     //hapus old image
            //     Storage::disk('local')->delete('public/data_file/'.$blog->link);

            //     //upload new image
            //     $image = $request->file('link');
            //     $image->storeAs('public/data_file',$request->kd_mk);

            //     $blog->update([
            //         'link'     => $request->kd_mk,
            //         'keterangan' => $request->keterangan,
            //         'kd_mk'   => $request->kd_mk
            //     ]);

            // }
            if($blog){
                //redirect dengan pesan sukses
                return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
            }else{
                //redirect dengan pesan error
                return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
            }

            // return redirect()->back()->with('status', 'File Has been uploaded successfully');
        }

    public function jadwalMatakuliah(){
        return view('kurikulum.jadwalmatakuliah');
    }
    public function getjadwalmatakuliah(Request $request){
        if ($request->ajax()) {
        $response = Http::get('http://api.stmikbandung.test:82/api/jadwal/');
        $data = $response->json();
        $datas = $data['data'];
        // if (!$datas['jadwal_kuliah']){
        //     return 404;
        // }
        // else{
        return DataTables::of($datas)
            ->addIndexColumn()
            ->make(true);
            // }
        }
        return view('kurikulum.kurikulum');
    }

    public function tujuanCapaian(){
        return view('kurikulum.tujuancapaian');
    }
    public function filetujuanCapaian(Request $request)
    {
		$blog = linktujuancapaian::create([
			'link' => $request->link,
			'keterangan' => $request->keterangan,
			'program_studi' => $request->program_studi,
		]);

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }

		// return redirect()->back()->with('status', 'File Has been uploaded successfully');
    }
}
