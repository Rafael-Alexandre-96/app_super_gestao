<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request) {
        $fornecedores = Fornecedor::
            where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->paginate(2);
        
        return view('app.fornecedor.listar', ['fornecedores'=>$fornecedores, 'request'=>$request->all()]);
    }

    public function adicionar(Request $request) {
        $msg = '';

        if($request->input('_token') != '' && $request->input('id') == '') {
            $request->validate([
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ]);

            Fornecedor::create($request->all());

            $msg = 'Cadastro realizado com sucesso';
        }

        if($request->input('_token') != '' && $request->input('id') != '') {
            $fornecedor = Fornecedor::find($request->input('id'));
            $request->validate([
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ]);

            if ($fornecedor->update($request->all())) {
                $msg = 'Cadastro atualizado com sucesso';
            } else {
                $msg = 'Erro na atualização';
            }

            return redirect()->route('app.fornecedor.editar', ['id'=>$request->input('id'), 'msg'=>$msg]);
        }

        return view('app.fornecedor.adicionar', ['msg'=>$msg]);
    }

    public function editar($id, $msg = '') {
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    public function excluir($id) {
        Fornecedor::find($id)->delete();

        return redirect()->route('app.fornecedor');
    }
}
