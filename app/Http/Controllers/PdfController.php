<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Asset;
use Illuminate\Support\Facades\DB;
use App\Models\ContentItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;



?>

<?php
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
        $output = $dompdf->output();
        $fileCount = count(glob('storage/PDF/*.pdf'));
        $newName = ($fileCount + 1) . '.pdf';
        //$contents = Content::select('select id_declaracao from contents where id_declaracao = ?', [$contents]);
        //return response()->json(
        //  $contents
        //);  
        //fopen('PDF/'.$contents, '.pdf');
        //return view('layouts/customer', compact('content_items', 'contents'));



    }

}

   
