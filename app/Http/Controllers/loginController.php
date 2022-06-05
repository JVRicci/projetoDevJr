<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;

class loginController extends Controller
{
    public function select (request $request){
        $user = DB::table('users')->where('name', $request->nome );
        if($user){
            return view('inicio',  ['user'=>$user]);
        }
        else{
            return view('login');
        }
    }
}
