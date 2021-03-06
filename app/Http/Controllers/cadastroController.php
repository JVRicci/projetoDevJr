<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\cadastro;
use App\Models\clientes;
use App\Models\planos;
use DateTime;

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

        $id = request('id');

        $cadastro = DB::table('cadastros')
            ->join('clientes','clientes.id','=','cadastros.idCliente')
            ->join('planos','planos.id','=','cadastros.idPlano')
            //infos do cliente
            ->select('cadastros.id as id', 'clientes.id as idcliente', 'clientes.nome as nomec','clientes.documento as documento', 'clientes.email as email',
            'clientes.telefone as telefone', 'clientes.nascimento as nascimento', 
            'cadastros.fidelidadeFim as fidelidade',
            //infos do plano
            'planos.nome as nomep', 'planos.download as download', 'planos.upload as upload',
             'planos.inicio as inicio', 'planos.fim as fim', 'planos.valor as valor', )
            ->get()
            ->where('id', $id );
            
        return view('components/cadastros/cadastroRegistrado', ['cadastro'=>$cadastro]);
    }

    public function store(request $request){
       
        $iniFid = $request->inicio;
        $fimFid = date( "Y-m-d", strtotime( "{$iniFid} +12 month" ) );

        cadastro::create([
            'idCliente' =>$request->cliente,
            'idPlano' => $request->plano,
            'fidelidadeInicio' =>$request->inicio,
            'fidelidadeFim' => $fimFid
        ]);

        
        $cadastros = DB::table('cadastros')->get();
        $clientes = DB::table('clientes')->get();
        return redirect ('/cons-cadastro');
    }
}
