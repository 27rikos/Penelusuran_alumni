<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelolaVideoController extends Controller
{
    public function video(){
        $datas=Video::get();
        return view('admin.video',compact(['datas']));
    }
    public function create(){
        return view('admin.tambahvideo');
    }
    public function store(Request $request){

        $request->validate([
            'judul'=>'required',
            'file'=>'required|mimes:jpeg,png,jpeg|max:2048',
            'link'=>'required',

        ]);
        //upload image:
        $foto=$request->file('file');
        $foto->storeAs('public/video_foto',$foto->hashName());

        Video::create([

            'judul'=>$request->judul,
            'file'=>$foto->hashName(),
            'link'=>$request->link,
        ]);
        return redirect('/video_control')->with('success','Video Berhasil Dibagikan');
    }
    public function edit($id){
        $data=Video::where('id',$id)->first();
        return view('admin.editvideo',compact(['data']));
    }
    public function update(Request $request,$id){

        $data=Video::where('id',$id)->first();
        
        $request->validate([
            'judul'=>'required',
            'file'=>'mimes:jpeg,png,jpeg|max:2048',
            'link'=>'required',

        ]);

        if($request->hasFile('file')){
            //upload foto baru
            $foto=$request->file('file');
            $foto->storeAs('public/video_foto',$foto->hashName());

            //hapus foto lama
            Storage::disk('public')->delete('video_foto/'.$data['file']);

            //update 
            $data->update([
                'judul'=>$request->judul,
                'file'=>$foto->hashName(),
                'link'=>$request->link,
            ]);
        }else{
            $data->update([
                'judul'=>$request->judul,
                'link'=>$request->link,
            ]);
        }
    
        return redirect('/video_control')->with('success','Video Berhasil Diupdate');
    }
    public function destroy($id){
        $delete=Video::where('id',$id)->first();
        Storage::disk('public')->delete('video_foto/'.$delete->file);
        $delete->delete();
        return redirect('/video_control')->with('success','Video Berhasil Dihapus');
    }
}
