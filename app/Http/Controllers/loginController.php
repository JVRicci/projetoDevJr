<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;

class loginController extends Controller
{
    public function select (request $request){
        $user = DB::table('login')->where('login', $request->login)
            ->where('password', $request->senha );
        if($user==true){
            return view('main');
        }
        else{
            return view('login');
        }
    }
}
