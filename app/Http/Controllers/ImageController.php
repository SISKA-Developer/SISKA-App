<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profileImage;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function fotoprofil(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|mimes:jpg,png|max:4048',
            'keterangan' => 'required',
            'nim'   => 'required'
        ]);
        //get data Blog by ID
        $blog = profileImage::findOrFail($request->nim);

        if($request->file('link') == "") {
            // upload image
            // $nama = $request->kode_mk;
        $nama = $request->nim;
        $image = $request->file('image');
        // $request->file('file')->store('public/files');
        $image->store('public/data_file', $nama );

        $blog = profileImage::create([
            'image'     => $nama,
            'keterangan' => $request->keterangan,
            'nim'   => $request->nim
        ]);
        } else {
            //hapus old image
            Storage::disk('local')->delete('public/data_file/'.$blog->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/data_file',$request->nim);

            $blog->update([
                'image'     => $request->nim,
                'keterangan' => $request->keterangan,
                'kd_mk'   => $request->nim
            ]);

        }
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
