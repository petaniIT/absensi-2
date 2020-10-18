<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;

class ApiKegiatan extends Controller
{

    public function index(){

        $kegiatans = Kegiatan::all();
       return response()->json($kegiatans, 200);
    }

    //
}
