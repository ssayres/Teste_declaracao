<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Content;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function CDF(Request $request){

       
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
        $dompdf->stream('pdf.pdf');
    }
}



