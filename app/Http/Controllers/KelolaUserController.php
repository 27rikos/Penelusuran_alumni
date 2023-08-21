<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class KelolaUserController extends Controller
{
    public function kelola(){
        $users=User::where('type',0)->get();
        return view('admin.user',compact(['users']));
    }
    public function destroy($id){

        $user=User::where('id',$id)->first();

        $user->delete();
        return redirect('/main')->with('success','Data Berhasil Dihapus');
    }
}
