<?php

namespace App\Http\Controllers;
use App\Models\prodi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ProdiController extends Controller
{
    public function prodi(){

        $prodis=Prodi::all();
        return view('admin.prodi',compact('prodis'));
    }
    public function create(){
        return view('admin.tambahprodi');
    }

    public function store(Request $request){

       $request->validate([
        'kd_prodi'=>'required|unique:prodis',
        'prodi'=>'required',
       ]);
    
       Prodi::create([
        'kd_prodi'=>$request->kd_prodi,
        'prodi'=>$request->prodi,
       ]);

       return redirect('/prodi')->with('success','Data Berhasil Ditambahkan');
    }
    public function edit($id){

        $prodi=Prodi::find($id);

      return view('admin.editprodi',compact(['prodi']));
    }
    public function update(Request $request,$id){

        $request->validate([
            'kd_prodi'=>'required',Rule::unique('prodis')->ignore('prodis'),
        'prodi'=>'required'
        ]);

        $prodi=Prodi::find($id);
        $prodi->update([
        'kd_prodi'=>$request->kd_prodi,
        'prodi'=>$request->prodi,
        ]);
        return redirect('/prodi')->with('success','Data Berhasil Diubah');
    }
    public function destroy($id){
        $prodi=Prodi::where('id',$id)->first();
        $prodi->delete();
        return redirect('/prodi')->with('success','Data Berhasil Dihapus');
    }
}
