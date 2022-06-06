<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use App\Models\logins;

class loginController extends Controller
{
    public function select (request $request){
        $user = DB::table('logins')->where('login', $request->login)
            ->where('senha', $request->senha )->count();

        if($user>0){
            return view('main');
        }
        else{
            return view('login');
        }
    }

    public function store(request $request){
        logins :: create([
            'login'=>$request->loginReg,
            'senha'=>$request->senhaReg,
        ]);
        
        return view('login');
    }
}
