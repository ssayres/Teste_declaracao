<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentItem;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function CDF(Request $request)
    {


        $request = $request->all();
        $dompdf = new Dompdf(["enable_remote" => true]);
        //$dompdf->loadHtml("<h1>Teste PDF<h1>");

        ob_start();

        require public_path("index_pdf.blade.php");
        //$pdf = ob_get_clean();
        $dompdf->loadHtml(ob_get_clean());
        // Setup do papel
        $dompdf->setPaper('A4', '');

        // Renderizar o html como pdf
        $dompdf->render();

        //Gerar o PDF
        $dompdf->stream('pdf.pdf', ["Attachment" => false]);
    
    }

    public function getPDF()
    {
        

        $content_items = ContentItem::all();
        $contents = Content::all();
        return view('layouts/customer', compact('content_items', 'contents'));
        //$dompdf->loadHtml("<h1>Teste PDF<h1>");

    }

    public function downloadPDF(){
        $contents = Content::all();
        $content_items = ContentItem::all();
        $pdf = PDF::loadView('layouts/customer', compact('contents','content_items'));
        return $pdf->download('customers.pdf');
    }
}
