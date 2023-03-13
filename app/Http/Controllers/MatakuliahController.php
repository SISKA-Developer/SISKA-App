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

class MatakuliahController extends Controller
{
    public function index (){
        
        return view('kurikulum.matakuliah');
    }
    
    public function matakuliah(){
        
        return view('kurikulum.matakuliah');
    }
        public function getmatakuliahsmt1(Request $request){
        if ($request->ajax()) {
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
            $data = $response->json();
            $datas = $data['semester1'];
            return DataTables::of($datas)
                ->addIndexColumn()
                ->make(true);
        }
        return view('kurikulum.kurikulum');   
        }

        public function getmatakuliahsmt2(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
                $data = $response->json();
                $datas = $data['semester2'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');   
        }
        public function getmatakuliahsmt3(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
                $data = $response->json();
                $datas = $data['semester3'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');   
        }
        public function getmatakuliahsmt4(Request $request){
            if ($request->ajax()) {
                $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
                $data = $response->json();
                $datas = $data['semester4'];
                return DataTables::of($datas)
                    ->addIndexColumn()
                    ->make(true);
                }
            return view('kurikulum.kurikulum');   
        }
        public function getmatakuliahsmt5(Request $request){
                    if ($request->ajax()) {
                        $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
                        $data = $response->json();
                        $datas = $data['semester5'];
                        return DataTables::of($datas)
                            ->addIndexColumn()
                            ->make(true);
                    }
                    return view('kurikulum.kurikulum');   
        }
            
        public function getmatakuliahsmt6(Request $request){
            if ($request->ajax()) {
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
            $data = $response->json();
            $datas = $data['semester6'];
            return DataTables::of($datas)
                ->addIndexColumn()
                ->make(true);
                }
            return view('kurikulum.kurikulum');   
        }
        public function getmatakuliahsmt7(Request $request){
            if ($request->ajax()) {
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
            $data = $response->json();
            $datas = $data['semester7'];
            return DataTables::of($datas)
                ->addIndexColumn()
                ->make(true);
                }
            return view('kurikulum.kurikulum');   
        }
                        
        public function getmatakuliahsmt8(Request $request){
            if ($request->ajax()) {
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/matakuliah');
            $data = $response->json();
            $datas = $data['semester8'];
            return DataTables::of($datas)
                ->addIndexColumn()
                ->make(true);
                }
            return view('kurikulum.kurikulum');   
        }
        public function getjadwalmatakuliah(Request $request){
            if ($request->ajax()) {
            $response = Http::get('http://api.stmik-bandung.ac.id:16080/server/public/api/jadwal');
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
                        

    public function jadwalMatakuliah(){
        return view('kurikulum.jadwalmatakuliah');   
    }
    
    public function tujuanCapaian(){
        return view('kurikulum.tujuancapaian');
    }
}
