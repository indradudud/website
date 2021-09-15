<?php

namespace App\Http\Controllers;

use App\Models\Npp;
use Illuminate\Http\Request;

class KelolaNPPController extends Controller
{
    public function index(){
        return view('kelola_npp.index', [
            'npps' => Npp::all()
        ]);
    }
}
