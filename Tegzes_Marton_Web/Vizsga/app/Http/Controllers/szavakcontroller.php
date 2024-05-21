<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class szavakcontroller extends Controller
{
    public function show(){
        $szavak = DB::table('szavak')
        ->select('szavak.*')
        ->get();
        return $szavak;
    
    }
    public function show2(){
        $szavak = DB::table('szavak')
        ->select('szavak.*','tema.temanev')
        ->join('tema','tema.id','=','szavak.temaId')
        ->get();
        return $szavak;
    }

}
