<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;
use App\Http\Requests;

class FormController extends Controller
{
    public function index()
    {
        return view('halaman.formpendaftar');
    }

    public function daftar(Request $request)
    {
    	$daftar = new Pendaftar();
        $daftar->nama = $request->get('nama');
        $daftar->biaya = $request->get('biaya');
        $daftar->cuaca = $request->get('cuaca');
        $daftar->luas = $request->get('luas');
        $daftar->jarak = $request->get('jarak');
        $daftar->waktu = $request->get('waktu');
        $daftar->save();

        \Session::flash('flash_message','Data Berhasil Disubmit');
        return view('halaman.formpendaftar');


    }
}
