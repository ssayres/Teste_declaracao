<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Asset;
use App\Models\ContentItem;
use Dompdf\Dompdf;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

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
        $content->contato = $request->contato;
        $content->telefone = $request->telefone;
        $content->destinatario = $request->destinatario;
        $content->cnpj2 = $request->cnpj;
        $content->cep2 = $request->cep;
        $content->endereco2 = $request->endereco;
        $content->numero2 = $request->numero;
        $content->complemento2 = $request->complemento;
        $content->cidade2 = $request->cidade;
        $content->uf2 = $request->uf;
        $content->contato2 = $request->contato;
        $content->telefone2 = $request->telefone;
        $content->file = $this->generatePDF($request);
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

        return response()->json([
            "declaracao" => $content->id_declaracao,
            "filename" => $content->file
        ]);
    }

    public function download($declaracao) {
        $content = Content::find($declaracao);
        
        $headers = ['Content-Type: application/pdf'];
        return response()->file($content->file,  $headers);
        
    }
    public function Checkdownload($declaracao) {
        $content = Content::find($declaracao);
        $headers = ['Content-Type: application/pdf'];
        return response()->file($content->file,  $headers);
        
    }
    

    private function generatePDF()
    {
        $dompdf = new Dompdf(["enable_remote" => true]);
        ob_start();
        require public_path("index_pdf.blade.php");
        $dompdf->loadHtml(ob_get_clean());
        $dompdf->setPaper('A4', '');
        $dompdf->render();
        $output = $dompdf->output();
        $filename = storage_path("app/public/pdfs/". md5(time()) .".pdf");
        file_put_contents($filename, $output);
        ob_end_flush();
        return $filename;
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

