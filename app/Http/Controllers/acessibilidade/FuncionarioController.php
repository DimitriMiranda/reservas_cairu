<?php

namespace App\Http\Controllers\acessibilidade;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FuncionarioController extends Controller
{
      public function index(){
       // $usuarios = UsuarioService::getUsuarios();
        return view('funcionario.index');
       
    }

       public function create(){
       // $usuarios = UsuarioService::getUsuarios();
        return view('funcionario.create');
       
    }

    
    
    }
