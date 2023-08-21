<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Models\Peminatan;
use App\Models\Prodi;
class DaftarController extends Controller
{
    public function daftar(){
        $peminatans=Peminatan::select(['peminatan'])->get();
        $prodis=Prodi::select(['prodi'])->get();
        return view('users.daftar',compact(['peminatans','prodis']));
    }

    public function store(Request $request){
       
        $request->validate([
            'npm'=>'required|unique:alumnis',
            'nama'=>'required',
            'stambuk'=>'required',
            'id_peminatan'=>'required',
            'id_prodi'=>'required',
            'thn_lulus'=>'required',
            'sempro'=>'required',
            'semhas'=>'required',
            'meja_hijau'=>'required',
            'yudisium'=>'required',
            'judul_skripsi'=>'required',

            'file'=>'mimes:jpeg,jpg,png|max:2048',
        ]);

        //upload image:
        $foto=$request->file('file');
        $foto->storeAs('public/alumni_foto',$foto->hashName());

        Alumni::create([
            'npm'=>$request->npm,
            'nama'=>$request->nama,
            'stambuk'=>$request->stambuk,
            'id_peminatan'=>$request->id_peminatan,
            'id_prodi'=>$request->id_prodi,
            'thn_lulus'=>$request->thn_lulus,
            'sempro'=>$request->sempro,
            'semhas'=>$request->semhas,
            'meja_hijau'=>$request->meja_hijau,
            'yudisium'=>$request->yudisium,
            'judul_skripsi'=>$request->judul_skripsi,
            'pekerjaan'=>$request->pekerjaan,
            'tempat_pekerjaan'=>$request->tempat_pekerjaan,
            'file'=>$foto->hashName(),
        ]);
        return redirect('/home')->with('success','Data Berhasil Ditambahkan');

    }
}
