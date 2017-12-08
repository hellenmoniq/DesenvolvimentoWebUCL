<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Description of ClientesController
 *
 * @author HellenMS
 */
class ClientesController extends Controller  {
    //put your code here
    
    public function exibirClientes(){
        return view ("clientes.index");
    }
    
    
    public function detalhesCliente($id){
        $clientes = ['João', 'Maria', 'Hellen'];
        return $clientes[$id];
    }
}
