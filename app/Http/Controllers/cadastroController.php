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
        
        $cadastros = DB::table('cadastros')
            ->join('clientes','clientes.id','=','cadastros.idCliente')
            ->join('planos','planos.id','=','cadastros.idPlano')
            ->select('cadastros.id', 'clientes.nome as nomec', 'planos.nome as nomep', 'planos.valor')
            ->get();
        return view('components/cadastros/cons-cadastro', ['cadastros'=>$cadastros],);
        //return $cadastros;
    }

    public function carregaCad(request $request){

        $id = $request->query('id');

        $cadastro = DB::table('cadastros')
            ->join('clientes','clientes.id','=','cadastros.idCliente')
            ->join('planos','planos.id','=','cadastros.idPlano')
            ->select('cadastros.id as id', 'clientes.nome as nomec', 'planos.nome as nomep', 'planos.valor')
            //->get();
            ->where('id', $request->query('id') );
        //return view('components/cadastros/cadastroRegistrado', ['cadastro'=>$cadastro],);
        return $cadastro;
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
