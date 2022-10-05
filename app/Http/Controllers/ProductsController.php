<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Produto(Request $request)
    {
        $product = new Products;
        $$product->idProduct = $request->idProduct;
        $product->cCusto = $request->cCusto;
        $product->content = $request->content;
        $product->quantity = $request->quantity;
        $product->value = $request->value;
        $product->save();
        
    }
}
