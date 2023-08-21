<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use Illuminate\Http\Request;

class UpdatePekerjaan extends Controller
{
    public function edit($id){
        $data=Alumni::where('id',$id)->first();
        return view('users.editkerja',compact(['data']));
    }
    public function update(Request $request,$id){

        $data=Alumni::where('id',$id)->first();
            $data->update([
            'pekerjaan'=>$request->pekerjaan,
            'tempat_pekerjaan'=>$request->tempat_pekerjaan,
            ]);
        
        return redirect('/home')->with('success','Data Berhasil Diubah');
    }
}
