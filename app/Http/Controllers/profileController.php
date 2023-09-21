<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/foto_profile', $image->hashName());

        //create post
        Post::create([
            'image'     => $image->hashName(),
            'nim'     => $request->nim,
            'keterangan'   => $request->keterangan
        ]);

        //redirect to index
        return redirect()->route('mahasiswa.myprofile')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
