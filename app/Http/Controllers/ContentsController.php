<?php

namespace App\Http\Controllers;
use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $content->destinatario = $request->destinatario;
        $content->content = $request->content;
        $content->quantity = $request->quantity;
        $content->value = $request->value;
        $content->save();
        
        
        return redirect('/dashboard/GerarDeclaracao');

    }
}
