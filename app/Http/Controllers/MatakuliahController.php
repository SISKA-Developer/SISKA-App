<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;
use Hashids\Hashids;
use App\Models\matakuliah;
class MatakuliahController extends Controller
{
    public function index (){
        $id = '619332782';
        $hashids = new Hashids();
        $id = $hashids->encode($id);
        // var_dump($id);
        // exit();
        return view('kurikulum.matakuliah');
    }
    
    public function matakuliah(){
 
        return view('kurikulum.matakuliah');   
    }
    public function getmatakuliah(Request $request){
 
    if ($request->ajax()) {
        $data = matakuliah::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></a> <a href="javascript:void(0)" class="delete btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
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
