<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function video(){
        $datas=Video::latest()->paginate()->all();
        return view('publics.video',compact(['datas']));
    }
}
