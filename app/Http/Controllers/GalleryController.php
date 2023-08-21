<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function gallery(){
        $fotos=Gallery::all();
        return view('admin.galery',compact(['fotos']));
    }
    public function create(){
        return view('admin.tambahfoto');
    }
    public function store(Request $request){

        $request->validate([
            'keterangan'=>'required',
            'foto'=>'required|mimes:jpeg,jpg|max:2048',
        ]);
        //upload image:
        $file=$request->file('foto');
        $filename=$file->getClientOriginalName();
        $path='gallery/'.$filename;
        //directory:
        Storage::disk('public')->put($path,file_get_contents($file));

        //simpan data:
        Gallery::create([
        'keterangan'=>$request->keterangan,
        'foto'=>$filename,
        ]);
        return redirect('/gallery')->with('success','Foto Berhasil Ditambahkan');
    }
    public function edit($id){
        $foto=Gallery::find($id)->first();
        return view('admin.editgallery',compact(['foto']));
    }
    public function update(Request $request,$id){

        $foto=Gallery::where('id',$id)->first();
        $request->validate([
            'keterangan'=>'required',
            'foto'=>'mimes:jpeg,jpg|max:2048',
        ]);
        if($request->file('foto')){
            //upload image:
            $file=$request->file('foto');
            $filename=$file->getClientOriginalName();
            $path='gallery/'.$filename;
            //directory:
            Storage::disk('public')->put($path,file_get_contents($file));

            //hapus file lama:
            Storage::disk('public')->delete('gallery/'.$foto->foto);

            //update:
            $foto->update([
                'keterangan'=>$request->keterangan,
                'foto'=>$filename,
            ]);
        }
        else{
            $foto->update([
                'keterangan'=>$request->keterangan,
            ]);
        }
        return redirect('/gallery')->with('success','Foto Berhasil Diubah');
    }
    public function destroy($id){
        $delete=Gallery::where('id',$id)->first();
        Storage::disk('public')->delete('gallery/'.$delete->foto);
        $delete->delete();
        return redirect('/gallery')->with('success','Foto Berhasil Dihapus');
    }

    public function view_gallery(){
        $data=Gallery::latest()->paginate()->all();
        return view('publics.gallery',compact(['data']));
    }
}

