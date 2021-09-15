<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'users' => User::all()
        ]);
    }
    public function show(){
        return view('dashboard/pengguna.index', [
            'users' => User::all()
        ]);
    }
}
