<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashBoardController extends Controller
{
    public function index() {
        if(Auth::user()->hasRole('user')){
            return view('DashboardUser');
    }elseif(Auth::user()->hasRole('admin')){
        return view('DashboardAdmin');
    


}


}

    public function GerarDeclaracao() {
        return view('layouts/GerarDeclaracao');
    }
    public function Conteudo(Request $request) {
        //dd($request->all());
        return redirect()->route('dashboard.GerarDeclaracao')->with('eae', $request->post());
        
        return response()->json(
            $request);

        return $request->input();
        
        
    
        
        //view('layouts/Conteudo', $request->post());
            
    }
    

}