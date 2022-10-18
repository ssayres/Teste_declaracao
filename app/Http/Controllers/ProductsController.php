<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ContentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function products($id)
    {   $id = new ContentItem();
        $id = DB::select('select * from content_items where id_product = ?', [$id]);

            return response()->json(
               $id

            );         
        }
}
