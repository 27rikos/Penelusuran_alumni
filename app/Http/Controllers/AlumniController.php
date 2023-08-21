<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\Peminatan;
use App\Models\Prodi;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    
    public function alumni(){
        
        $Alumnis = Alumni::all();
        return view('admin.alumni',compact(['Alumnis']));
    }
    public function create(){
        $peminatans=Peminatan::select(['peminatan'])->get();
        $prodis=Prodi::select(['prodi'])->get();
        return view('admin.tambahdataalumni',compact(['peminatans','prodis']));
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
        return redirect('/alumni')->with('success','Data Berhasil Ditambahkan');

    }
    public function edit($id){
        $peminatans=Peminatan::select(['peminatan'])->get();
        $prodis=Prodi::select(['prodi'])->get();
        $alumni=Alumni::where('id',$id)->first();
        return view('admin.editdataalumni',compact(['alumni','peminatans','prodis']));
    }

    public function update(Request $request,$id){

        $data=Alumni::where('id',$id)->first();
        $request->validate([
            'npm'=>'required',Rule::unique('alumnis')->ignore('alumnis'),
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

        if($request->hasFile('file')){
            //upload foto baru
            $foto=$request->file('file');
            $foto->storeAs('public/alumni_foto',$foto->hashName());

            //hapus foto lama
            Storage::disk('public')->delete('alumni_foto/'.$data['file']);

            //update 
            $data->update([
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
        }else{
            $data->update([
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
            ]);
        }
        return redirect('/alumni')->with('success','Data Berhasil Diubah');
    }
    public function destroy($id){
        
        $alumni=Alumni::where('id',$id)->first();
        Storage::disk('public')->delete('alumni_foto/'.$alumni['file']);
        $alumni->delete();
        return redirect('/alumni')->with('success','Data Berhasil Dihapus');
    }

    public function approve($id){
        $data=Alumni::where('id',$id)->first();
        $data->update([
        'status'=>1
        ]);
        return redirect('/alumni')->with('success','Data Di Approve');
    }
    
}
