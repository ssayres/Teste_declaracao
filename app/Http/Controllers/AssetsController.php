<?php

namespace App\Http\Controllers;
use App\Models\Asset;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function store() {

        $data = new Asset();
        $contentItem = new Content();
        $data ->id_file = $contentItem->id_declaracao;
        $data->file = storage_path('PDF/1.pdf');
        $data->save();
        return redirect('/dashboard/GerarDeclaracao');

        
        

    }



    
}
