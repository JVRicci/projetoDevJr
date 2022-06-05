<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\planos;

class planosController extends Controller
{
    
    public function create(){
        return view('components\planos\cad-plano');
    } 

    public function store(request $request){
        planos::create([
            'nome'=>$request->nome,
            'download'=>$request->download,
            'upload'=>$request->upload,
            'inicio'=>$request->inicio,
            'fim'=>$request->fim,
            'valor'=>$request->valor
        ]);
        $planos = DB::table('planos')->get();
        return view('components/planos/cons-plano', ['planos'=>$planos]);
    }

    public function select(request $request){
        $planos = DB::table('planos')->get();
        return view('components/planos/cons-plano', ['planos'=>$planos]);
    }
}
