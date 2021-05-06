<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    
    //TAMPILKAN DATA BIASA TANPA ADA SEARCH
    // public function index()
    // {
    //     $data_siswa = \App\Models\Siswa::all();
    //     return view('siswa.index', ['data_siswa' => $data_siswa]) ;
    // }


    //INI MENANMPILKAN DATA SEARCH
    public function index(Request $request)
    {
        if($request->has('cari')){
            //tampilkan kata yang di cari
            $data_siswa = \App\Models\Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();    
        }
        else{
            $data_siswa = \App\Models\Siswa::all();

        }
        return view('siswa.index', ['data_siswa' => $data_siswa]) ;
    }

    public function create(Request $request)
    {
        \App\Models\Siswa::create($request->all());
        return redirect ('/siswa')->with('sukses','data berhasil di input');
    }

    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        return view('/siswa/edit', ['siswa' => $siswa]);
        # code...
    }

    public function update(Request $request, $id)
    {
        $siswa = \App\Models\Siswa::find($id);

        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'data berhasil di updated');
        # code...
    }

    public function delete($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa -> delete($siswa);
        return redirect('/siswa')->with('sukses', 'data berhasil di delete');
        # code...
    }
}
