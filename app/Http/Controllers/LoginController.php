<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('site.login', ['titulo'=>'Login']);
    }

    public function autenticar(Request $request) {
        $request->validate([
            'usuario' => 'email',
            'senha' => 'required'
        ]);

        print_r($request->all());
    }
}
