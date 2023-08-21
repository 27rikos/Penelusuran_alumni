<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganKerjaController extends Controller
{
    public function lowongan_kerja(){
        return view('users.tambahlowonganuser');
    }

    public function store(Request $request){

        $request->validate([
         'pengirim'=>'required',
         'hp'=>'required|max:12',
         'email'=>'required',
         'file'=>'required|mimes:pdf|max:2048',
        ]);
 
        //upload file:
        $file=$request->file('file');
        $filename=$file->getClientOriginalName();
        $path='lowongan/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));
 
        Lowongan::create([
         'pengirim'=>$request->pengirim,
         'hp'=>$request->hp,
         'email'=>$request->email,
         'file'=>$filename,
 
        ]);
        return redirect('/lowongan_kerja')->with('success','Lowongan kerja Berhasil Dibagikan');
     }

     public function tampil(){
        $datas=Lowongan::latest()->paginate()->all();
        return view('publics.lowongankerja',compact(['datas']));
     }

     public function pdf($id){
        $data=Lowongan::where('id',$id)->first();
        return view('publics.tampilpdf',compact(['data']));
     }
}
