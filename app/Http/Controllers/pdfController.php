<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Response;

class pdfController extends Controller
{
    public function getSilabus ($mk_id){
        // var_dump($mk_id);      
        $path = "data_file/".$mk_id.".pdf";
        return Response::make(file_get_contents($path), 200, [
            'content-type'=>'application/pdf',
        ]);  
        // return view('kurikulum.matakuliah',compact('data'));

    }
    //
}
