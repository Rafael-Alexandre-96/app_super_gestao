<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        $erro = '';
        
        if($request->get('erro') == 1) {
            $erro = 'Usuário/Senha não existe.';
        } elseif($request->get('erro') == 2) {
            $erro = 'Favor realizar login.';
        }

        return view('site.login', ['titulo'=>'Login', 'erro'=>$erro]);
    }

    public function autenticar(Request $request) {
        
        session_start();
        unset($_SESSION['nome']);
        unset($_SESSION['email']);

        $request->validate([
            'usuario' => 'email',
            'senha' => 'required'
        ]);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();
        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($usuario->name)) {
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro'=>1]);
        }
    }

    public function sair() {
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        session_destroy();
        return redirect()->route('site.index');
    }
}
