<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'username' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255',
            'fullname' => 'required',
            'email' => 'required|email',
            'level' => 'required',
            'divisi' => 'required',

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('berhasil', 'Registrasi Berhasil! Silahkan Login');
        return redirect('/Login');
    }
}
