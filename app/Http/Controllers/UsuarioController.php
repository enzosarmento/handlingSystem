<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {

        $data = [];
        if($request->isMethod('POST')) {
            $login = $request->input('login');
            $senha = $request->input('senha');

            if(Auth::attempt(['login' => $login, 'password' => $senha])) {

                return redirect()->route('admin.home');

            } else {
                $data['resp'] = 'Usuário inválido';
            }
        }

        return view('login', $data);
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function novo(Request $request)
    {
        $data = [];
        if($request->isMethod('POST')) {

            $usuario = new Usuario($request->all());

            $senha = $request->input('senha');
            $senhaCript = Hash::make($senha);

            $usuario->password = $senhaCript;
            $usuario->save();
            $data['resp'] = 'Usuário salvo com sucesso';
        }

        $listaUsuario = Usuario::all();
        $data['lista'] = $listaUsuario;
        return view('admin.novousuario', $data);
    }
}
