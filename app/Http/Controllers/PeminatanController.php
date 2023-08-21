<?php

namespace App\Http\Controllers;
use App\Models\Peminatan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class PeminatanController extends Controller
{
    public function peminatan(){
        $peminatans=Peminatan::all();
        return view('admin.peminatan',compact('peminatans'));
    }

    public function create(){
        
        return view('admin.tambahpeminatan');
    }

    public function store(Request $request){

    $request->validate([
    'kd_peminatan'=>'required|unique:peminatans',
    'peminatan'=>'required',
    ]);
    Peminatan::create([
        'kd_peminatan'=>$request->kd_peminatan,
        'peminatan'=>$request->peminatan,
    ]);
    return redirect('/peminatan')->with('success','Data Berhasil Ditambahkan');
    }
    public function edit($id){
        $peminatan=Peminatan::find($id);
       return view('admin.editpeminatan',compact('peminatan'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'kd_peminatan'=>'required',Rule::unique('peminatans')->ignore('peminatans'),
            'peminatan'=>'required',
            ]);
        $peminatan=Peminatan::find($id);
        $peminatan->update([
        'kd_peminatan'=>$request->kd_peminatan,
        'peminatan'=>$request->peminatan,
        ]);
        return redirect('/peminatan')->with('success','Data Berhasil Diubah');
    }
    public function destroy($id){

        $peminatan=Peminatan::where('id',$id)->first();
        $peminatan->delete();
        return redirect('/peminatan')->with('success','Data Berhasil Dihapus');
    }
}
