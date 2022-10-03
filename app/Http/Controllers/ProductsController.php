<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Produto(Request $request)
    {
        product = new Product;
        $tabela1->nome = $request->nome;
        $tabela1->cpf = $request->cpf;
        $tabela1->save();

        $tabela2 = new Tabela2;
        $tabela2->rua = $request->rua;
        $tabela2->bairro = $request->bairro;
        $tabela2->save();
    }
}
