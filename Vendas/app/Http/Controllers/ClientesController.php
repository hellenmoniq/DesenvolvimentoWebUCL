<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Input;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return view ('clientes.index');
        $clientes = [
            [
                "id" => 1,
                "nome" => "Hellen"
            ],
            
            [
                "id" => 2,
                "nome" => "Edgar"
            ],
         
            [
                "id" => 3,
                "nome" => "Joaquina"
            ],
         ];

      return view('clientes.index', [
          'clientes' => $clientes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Input::get('id');
        $nome = Input::get('nome');
        $cnpj = Input::get('cnpj');
        
        return "Id Cliente:$id<br>Nome Cliente:$nome<br>CNPJ do Cliente:$cnpj<br>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $clientes = [
            [
                "id" => 1,
                "nome" => "Hellen",
                "cnpj" => 00000000000000
            ],
            
            [
                "id" => 2,
                "nome" => "Edgar",
                 "cnpj" => 11111111111111 
            ],
         
            [
                "id" => 3,
                "nome" => "Joaquina",
                "cnpj" => 22222222222222
            ],
         ];
     
          $cliente = [
         "id" => 0,
         "nome" => "",
         "cnpj" => 000000000000
     ];

     for ($i=0;$i<count($clientes);$i++){
         if($clientes[$i]['id'] == $id){
             $cliente = $clientes[$i];
         }
     }
     
        return view ('clientes.show', [
            'cliente' => $cliente
            
                ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
