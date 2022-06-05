<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\clientes;

class clientesController extends Controller{
    public function create(){
        return view('components/clientes/cad-cliente');
    } 
    
    
    public function select(request $request){
        $clientes = DB::table('clientes')->get();
        return view('components/clientes/cons-cliente', ['clientes'=>$clientes]);
    }

    public function store(Request $request){
        clientes::create([
            'nome'=>$request->nome,
            'documento'=>$request->documento,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'nascimento'=>$request->nascimento          

        ]);
        
        $clientes = DB::table('clientes')->get();
        return view('components/clientes/cons-cliente', ['clientes'=>$clientes]);
    }
}
