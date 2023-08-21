<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class Pencarian extends Controller
{
    public function pencarian(){
       
        $datas=Alumni::where('status',1)->Paginate(8);
        return view('users.Pencarian',compact(['datas']));
    }
    
    public function cari(Request $request){
        $cari=$request->cari;
        $datas=Alumni::where('stambuk','like',"%".$cari."%")->orwhere('npm','like',"%".$cari."%")->orwhere('nama','like',"%".$cari."%")->Paginate();
        return view('users.Pencarian',compact(['datas']));
    }
}
