<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UserController extends Controller
{
    public function index(){
        $this->checkIfExists();
        return view('welcome');
    }

    public function loginScr(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $usuario = Usuario::where('Login', $request->username)->first();
        if (Hash::check($request->password, $usuario->Senha))
        {
            Auth::loginUsingId($usuario->ID);
            $userType = $usuario->Tipo;
            $request->session()->put('userType',  $userType);
            return view('home');
        }else{
            $msg = "Erro no login. Verifique seu Login/Senha";
            return view('login', ['msg'=>$msg]);
        }
    }

    public function signupScr(){
        return view('signup');
    }
    public function signup(Request $request){
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $usuario = new Usuario;
        $usuario->Nome = $request->name;
        $usuario->Login = $request->username;
        $usuario->Tipo = 'USER';
        $usuario->Senha = bcrypt($request->password);
        $usuario->save();

        return redirect()->route('welcome');
    }

    public function checkIfExists(){
        if(!(Usuario::exists())){
            $userP = Usuario::create(array(
                'Nome' => 'Paulo Lopes',
                'Login' => 'phour',
                'Senha' => bcrypt('sambalele'),
                'Tipo' => 'ADMIN'
           ));
           $userS = Usuario::create(array(
               'Nome' => 'Samuel Augusto',
               'Login' => 'samuca',
               'Senha' => bcrypt('samuel123'),
               'Tipo' => 'ADMIN'
           ));
           $userVG = Usuario::create(array(
               'Nome' => 'Vitor Godinho',
               'Login' => 'cabuloso',
               'Senha' => bcrypt('ronaldo'),
               'Tipo' => 'ADMIN'
           ));
           $userVH = Usuario::create(array(
               'Nome' => 'Vinicius Hiago',
               'Login' => 'sheypado',
               'Senha' => bcrypt('veneno'),
               'Tipo' => 'ADMIN'
           ));
        }
        
    }
}
