<?php

namespace App\Http\Controllers\acessibilidade;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionario;


class FuncionarioController extends Controller
{

    public function index()
    {

        $funcionarios = Funcionario::orderBy('nome', 'ASC')->get();
        return view('funcionario.index')->withFuncionarios($funcionarios);
    }

    public function create()
    {

        return view('funcionario.create');
    }

    public function show($_funcioanrioId)
    {
        // dd($_funcioanrioId);
        $funcionario = Funcionario::whereId($_funcioanrioId)->first();

        //dd($funcionario);
        return view('funcionario.edit')->withfuncionario($funcionario);
    }

    public function store(Request $_request)
    {

        $fields = $_request->all();
        $response_ = Funcionario::create($fields);
    }

    public function update($_funcioanrioId, Request $_request)
    {
        try {

            $funcionario = Funcionario::findOrFail($_funcioanrioId);
            $input_ = $_request->all();
            $funcionario->fill($input_)->save();
            Session::flash('flash_message','Dados Atualizados Com Sucesso.');
            return redirect()->back();
                  
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
            Session::flash('flas_message', 'Erro -> '.$exc->getTraceAsString());
        }
    }

}
