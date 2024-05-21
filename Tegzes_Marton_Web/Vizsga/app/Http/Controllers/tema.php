<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tema extends Controller
{
    public function show(){
        $tema = DB::table('tema')
        ->select('tema.*')
        ->get();
        return $tema;
    
    }
}
