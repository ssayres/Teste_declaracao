<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function store(Request $request) {

        $data = new Asset();
        $file = $request->file;
        $filename=time().'.'.$file->getClienteOriginalExtension();
        $request->file->move('PDF',$filename);
        $data->file=$filename;

        $data->save();

        


    }
}
