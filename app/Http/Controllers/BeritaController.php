<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BeritaController extends Controller
{
    public function berita(){
        $beritas=Berita::all();
        return view('admin.berita',compact('beritas'));
    }
    public function create(){
        return view('admin.tambahberita');
    }
    
     public function store(Request $request){

        $valid=$request->validate([
        
        'judul'=>'required',
        'foto'=>'required|mimes:jpeg,jpg,png|max:2048',
        'penulis'=>'required',
        'isi'=>'required',
        'tanggal'=>'required',
        ]);
        //upload image:
        $foto=$request->file('foto');
        $foto->storeAs('public/image',$foto->hashName());

        Berita::create([
        'judul'=>$request->judul,
        'foto'=>$foto->hashName(),
        'penulis'=>$request->penulis,
        'isi'=>$request->isi,
        'tanggal'=>$request->tanggal,
        ]);
        return redirect('/berita')->with('success','Berita Berhasil Ditambahkan');
    }
    public function edit($id){
        $berita=Berita::find($id);
      return view('admin.editberita',compact('berita'));
    }
    public function update(Request $request,$id){
        $berita=Berita::where('id',$id)->first();
        $request->validate([
        
            'judul'=>'required',
            'foto'=>'mimes:jpeg,jpg,png|max:2048',
            'penulis'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
            ]);

            if($request->hasFile('foto')){
                //upload foto baru
                $foto=$request->file('foto');
                $foto->storeAs('public/image',$foto->hashName());

                //hapus foto lama
                Storage::disk('public')->delete('image/'.$berita['foto']);

                //update 
                $berita->update([
                    'judul'=>$request->judul,
                    'foto'=>$foto->hashName(),
                    'penulis'=>$request->penulis,
                    'isi'=>$request->isi,
                    'tanggal'=>$request->tanggal,
                ]);
            }else{
                $berita->update([
                    'judul'=>$request->judul,
                    'penulis'=>$request->penulis,
                    'isi'=>$request->isi,
                    'tanggal'=>$request->tanggal,
                ]);
            }
            return redirect('/berita')->with('success','Berita Berhasil Ditambahkan');
    }
    public function destroy($id){
        $berita=Berita::where('id',$id)->first();
         Storage::disk('public')->delete('image/'.$berita['foto']);
         $berita->delete();
         return redirect('/berita')->with('success','Berita Berhasil Dihapus');
    }

    public function tampil_berita($id){
       $data=Berita::where('id',$id)->first();
        return view('publics.viewberita',compact(['data']));
    }

    public function old(){
        $datas=Berita::latest()->paginate()->all();
         return view('publics.berita_lama',compact(['datas']));
     }
}
