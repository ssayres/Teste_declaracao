<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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
        file_put_contents('storage/PDF/'.$newName, $output);
        //$contents = Content::select('select id_declaracao from contents where id_declaracao = ?', [$contents]);
        //return response()->json(
        //  $contents
        //);  
        //fopen('PDF/'.$contents, '.pdf');
        //return view('layouts/customer', compact('content_items', 'contents'));



    }

    public function getPDF(){
        //$filename = '1.pdf';
        //$file = storage_path(). "/app/public/PDF/". $filename;
        //$headers = ['Content-Type: application/pdf'];
        //return response()->file($file,  $headers);
        //public function getPDF($file)
      //   
           // $dompdf = new Dompdf(["enable_remote" => true]);
            //$dompdf->loadHtml("<h1>Teste PDF<h1>");
          //  ob_start();
          //  file_get_contents(storage_path('app/public/PDF/1.pdf'));
            //$pdf = ob_get_clean();
         //   $dompdf->loadHtml(ob_get_clean());
            // Setup do papel
         //   $dompdf->setPaper('A4', '');   
            // Renderizar o html como pdf
         //   $dompdf->render();
            //Gerar o PDF
         //   $dompdf->stream('pdf.pdf', ["Attachment" => false]);
         
        $dompdf = new Dompdf(["enable_remote" => true]);
        //$dompdf->loadHtml("<h1>Teste PDF<h1>");

        ob_start();

        require public_path("index_pdf2.blade.php");
        //$pdf = ob_get_clean();
        $dompdf->loadHtml(ob_get_clean());
        // Setup do papel
        $dompdf->setPaper('A4', '');

        // Renderizar o html como pdf
        $dompdf->render();

        //Gerar o PDF
        $dompdf->stream('pdf.pdf', ["Attachment" => false]);
     



}

}
