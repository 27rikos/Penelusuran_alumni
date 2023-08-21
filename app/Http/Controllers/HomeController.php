<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Gallery;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.index');
    }
    public function admin(){
        $foto=Gallery::select(['id'])->count();
        $lowongans=Lowongan::select(['id'])->count();
        $beritas=Berita::select(['id'])->count();
        $alumnis=Alumni::select(['id'])->count();
        return view('admin.dashboard',compact(['alumnis','beritas','lowongans','foto']));
    }

    public function user(){
        $data = Alumni::where('status',1)->where(function($query) {
			$query->where('npm',Auth()->user()->npm);})->get();
        return view('users.user_dashboard',compact(['data']));

    }
}
