<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Gallery;

class AdminDashboard extends Controller
{
    public function dashboard(){
        $foto=Gallery::select(['id'])->count();
        $lowongans=Lowongan::select(['id'])->count();
        $beritas=Berita::select(['id'])->count();
        $alumnis=Alumni::select(['id'])->count();
        return view('admin.dashboard',compact('alumnis','beritas','lowongans','foto'));
    }
}
