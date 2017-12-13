<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Input;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_produtos = [
            [
                'id'=> 101,
                'nome'=> 'TV 55',
                'preco' =>2000
            ],
            
            [
                'id'=> 102,
                'nome'=> 'TV 4K',
                'preco' =>5000
            ],
            
            [
                'id'=> 103,
                'nome'=> 'TV 3D',
                'preco' =>8000
            ]
            
        ];
        return view('produtos.index', [
          'produtos' => $lista_produtos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('produtos.create');
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
        $preco = Input::get('preco');
        
        return "Id Produto:$id<br>Nome Produto:$nome<br>Preço:$preco<br>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $lista_produtos = [
            [
                'id'=> 101,
                'nome'=> 'TV 55',
                'preco' =>2000
            ],
            
            [
                'id'=> 102,
                'nome'=> 'TV 4K',
                'preco' =>5000
            ],
            
            [
                'id'=> 103,
                'nome'=> 'TV 3D',
                'preco' =>8000
            ],
            
        ];
        return view('produtos.show', [
          'produto' => $lista_produtos
        ]);
        
        
        //$produtos = ['TV', 'Xbox', 'Blu-ray'];
       // return $produtos[$id];
        
        /*$ultimas_vendas = [
            [
                "id" => 10,
                "data" => "26/08/2017",
                "cliente" => "João",
                "quantidade" => 100
            ],
            
            [
                "id" => 22,
                "data" => "27/08/2017",
                "cliente" => "Maria",
                "quantidade" => 101
            ],
            
            [
                "id" => 33,
                "data" => "28/08/2017",
                "cliente" => "Marcio",
                "quantidade" => 102
            ],
            
            [
                "id" => 44,
                "data" => "29/08/2017",
                "cliente" => "Mateus",
                "quantidade" => 103
            ]
        ];
        
        $lista_outros_produtos = [
            [
                'id'=> 101,
                'nome'=> 'TV 55'
            ],
            
            [
                'id'=> 102,
                'nome'=> 'TV 4K'
            ],
            
            [
                'id'=> 103,
                'nome'=> 'TV 3D'
            ]
            
        ];
        
        
        
        return view ('produtos.show', [
            'id_produto' => $id,
            'nome_produto' => $produtos[$id],
            'vendas' => $ultimas_vendas,
            'vendas_2' => [],
            'outros_produtos' => $lista_outros_produtos
                ]); */
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
        $produtos = ['TV', 'Xbox', 'Blu-ray'];
        return "O produto {$produtos[$id]} foi excluído";
    }
}
