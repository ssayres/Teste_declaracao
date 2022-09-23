<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;
use Laratrust\Traits\LaratrustUserTrait;

class ContentsController extends Controller
{
    public function Conteudo(Request $request){
        
        $content = new Content;
        $id = Auth::id(); // Retrieve the currently authenticated user's ID...

        
      // returns an instance of the authenticated user...
        $id = $request->user()->id; // Retrieve the currently authenticated user's ID...

         // Retrieve the currently authenticated user...
        $id = auth()->id();
       

        $content->id_user = $id;
        
    // Retrieve the currently authenticated user...
        $content->remetente = $request->remetente;
        $content->cnpj = $request->cnpj;
        $content->cep = $request->cep;
        $content->endereco = $request->endereco;
        $content->numero = $request->numero;
        $content->complemento = $request->complemento;
        $content->cidade = $request->cidade;
        $content->uf = $request->uf;
        $content->destinatario = $request->destinatario;
        $content->cnpj2 = $request->cnpj;
        $content->cep2 = $request->cep;
        $content->endereco2 = $request->endereco;
        $content->numero2 = $request->numero;
        $content->complemento2 = $request->complemento;
        $content->cidade2 = $request->cidade;
        $content->uf2 = $request->uf;
        $content->idProduct = $request->idProduct;
        $content->cCusto = $request->cCusto;
        $content->content = $request->content;
        $content->quantity = $request->quantity;
        $content->value = $request->value;
        $content->save();
        
        
        return redirect('/dashboard/GerarDeclaracao');

    }
   
    public function Historico(){

        $data = Content::all();
        return view('/layouts/Historico',['contents'=>$data]);
    }

}
