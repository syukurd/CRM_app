<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Models\Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]) ;
    }

    public function create()
    {
        # code...
    }
}
