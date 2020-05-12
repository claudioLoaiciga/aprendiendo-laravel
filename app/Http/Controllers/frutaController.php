<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')->get();
        return view('fruta.index',[
            'frutas' => $frutas
        ]);
    }
}
