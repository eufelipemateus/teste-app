<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    /**
     * Criar novo cliente
     *
     * @param  Request $request
     * @return void
     */
    public function create(Request $request){
        $data = $request->all();
        $cliente =  Cliente::create($data);
        return $cliente->toJson();
    }

    /**
     * Atualizar dados do cliente
     *
     * @param  mixed $id Id do cliente
     * @param  Request $request
     * @return void
     */
    public function update($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $data = $request->all();
        $cliente->update($data);
        return $cliente->toJson();
    }

    /**
     * Remover Cliente.
     *
     * @param  mixed $id ID do Cliente
     * @return void
     */
    public function delete($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return response()->json(["Cliente Removido"]);
    }

    /**
     * Obter dados de um cliente
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id){
        $cliente = Cliente::findOrFail($id);
        return $cliente->toJson();
    }

    /**
     * Procurar Cliente Pelo Ultimo numedo da placa
     *
     * @param  mixed $numero
     * @return void
     */
    public function procurarPorNumeroPlaca($numero){
        $cliente = Cliente::where('placa_carro', 'like', '%'.$numero)->get();
        return $cliente->toJson();
    }
}
