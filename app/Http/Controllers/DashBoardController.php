<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomProducts;
use Illuminate\Support\Facades\Auth;


class DashBoardController extends Controller
{
    public function index() {
        if(Auth::user()->hasRole('user')){
            return view('DashboardUser');
    }elseif(Auth::user()->hasRole('admin')){
        
        $data = CustomProducts::all();

        return view('DashboardAdmin', ['contents' => $data]);
}

    }



    public function GerarDeclaracao() {
        return view('layouts/GerarDeclaracao');
    }

    public function Historico() {
        return view('layouts/Historico');
    }
    
    

}
