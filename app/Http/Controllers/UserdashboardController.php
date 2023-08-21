<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserdashboardController extends Controller
{
    public function dashboard(){
          
        return view('users.user_dashboard');
    }
}
