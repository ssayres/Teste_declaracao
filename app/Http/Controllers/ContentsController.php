<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Asset;
use App\Models\ContentItem;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;
use Barryvdh\DomPDF\Facade as PDF;
use Laratrust\Traits\LaratrustUserTrait;

class ContentsController extends Controller
{
    public function Conteudo(Request $request)
    {
        $content = new Content;
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
        $fileCount = count(glob('storage/PDF/*.pdf'));
        $newName = ($fileCount + 1) . '.pdf';
        $content->file = storage_path('PDF/'.$newName);
        $content->save();
       


        foreach ($request->content_items as $item) {
            $contentItem = new ContentItem();
            $contentItem->id_content = $content->id_declaracao;
            $contentItem->id_product = $item["id_product"];
            $contentItem->cost_center = $item["cost_center"];;
            $contentItem->content = $item["content"];;
            $contentItem->quantity = intval($item["quantity"]);
            $contentItem->value = $item["value"];
            $contentItem->save();





            
        }


        echo json_encode($content);

        //return response()->json(['success' => 'Enviado ao banco com sucesso']);
        //return redirect('/dashboard/GerarDeclaracao');


    }


    public function Historico()
    {

        $data = Content::all();
        
        return view('/layouts/Historico', ['contents' => $data]);
        
    }
    public function Teste()
    {
        $data = Content::all();
        
        return view('/layouts/Teste', ['contents' => $data]);
        
    }
    
}