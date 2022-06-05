<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cadastro;
use App\Models\clientes;
use App\Models\planos;

class cadastroController extends Controller
{
    
    public function cadastrar(){
        $clientes = DB::table('clientes')->get();
        $planos = DB::table('planos')->get();
        return view('components/cadastros/cad-cadastro', ['clientes'=>$clientes], ['planos'=>$planos]);
    }

    public function select(){
        $clientes = DB::table('clientes')->get();
        $cadastros = DB::table('cadastros')->get();
        $planos = DB::table('planos')->get();
        return view('components/cadastros/cons-cadastro', ['clientes'=>$clientes],['planos'=>$planos]);
    }

    public function store(request $request){
        cadastro::create([
            'idCliente' =>$request->cliente,
            'idPlano' => $request->plano,
            'fidelidadeInicio' =>$request->inicio
        ]);

        
        $cadastros = DB::table('cadastros')->get();
        $clientes = DB::table('clientes')->get();
        return view('components/cadastros/cons-cadastro', ['clientes'=>$clientes]);
    }
}
