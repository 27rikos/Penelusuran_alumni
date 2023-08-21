<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function page(){
        $datas=Berita::latest()->paginate(6);;
        return view('users.index',compact(['datas']));
    }
}
