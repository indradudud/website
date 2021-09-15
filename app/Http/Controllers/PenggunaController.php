<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        return view('pengguna.index', [
            'users' => User::all()
        ]);
    }
}
