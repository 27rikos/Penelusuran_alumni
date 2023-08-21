<?php

namespace App\Http\Controllers;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LowonganController extends Controller
{
    public function lowongan(){
        $lowongans=Lowongan::all();
        return view('admin.lowongan',compact('lowongans'));
    }
    public function create(){
        return view('admin.tambahlowongan');
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
       return redirect('/lowongan')->with('success','Lowongan kerja Berhasil Ditambahkan');
    }

    public function preview($id){
        $prev=Lowongan::find($id);
        return view('partials.prev',compact('prev'));
    }
    public function edit($id){
        $data=lowongan::find($id);
        return view('admin.editlowongan',compact('data'));

    }
    public function update(Request $request,$id){
        $data=Lowongan::where('id',$id)->first();
        $request->validate([
            'pengirim'=>'required',
            'hp'=>'required|max:12',
            'email'=>'required',
            'file'=>'mimes:pdf|max:2048',
           ]);

        if($request->file('file')){

        //upload file:
        $file=$request->file('file');
       $filename=$file->getClientOriginalName();
       $path='lowongan/'.$filename;
       Storage::disk('public')->put($path,file_get_contents($file));

       //hapus foto lama dari storage:
      Storage::disk('public')->delete('lowongan/'.$data->file);
      //update:
      $data->update([
        'pengirim'=>$request->pengirim,
        'hp'=>$request->hp,
        'email'=>$request->email,
        'file'=>$filename,

      ]);
        }else{
            $data->update([
                'pengirim'=>$request->pengirim,
                'hp'=>$request->hp,
                'email'=>$request->email,
            ]);
        }
        return redirect('/lowongan')->with('success','Lowongan kerja Berhasil Diubah');
    }

    public function destroy($id){
        $delete=Lowongan::where('id',$id)->first();
        Storage::disk('public')->delete('lowongan/'.$delete->file);
        $delete->delete();
        return redirect('/lowongan')->with('success','Lowongan Kerja Berhasil Dihapus');
    }
}
