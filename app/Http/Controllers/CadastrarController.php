<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CachorrosController extends Controller
{
    public function create(){
        return view('cadastro.novo');
    }

    public function store( Request $request ){
        dd($request->all());
    }
}