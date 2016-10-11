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

        $funcionario = Funcionario::whereId($_funcioanrioId)->first();
        return view('funcionario.edit')->withfuncionario($funcionario);
    }

    public function store(Request $request)
    {

        /*
          $this->validate($request,[
          'nome' =>'required']
          ); */


        $fields = $request->all();
        $response_ = Funcionario::create($fields);

        return redirect('funcionario');
    }

    public function update($_funcionarioId, Request $_request)
    {
        try {

            $funcionario = Funcionario::findOrFail($_funcionarioId);
            $input_ = $_request->all();
            $funcionario->fill($input_)->save();
            Session::flash('flash_message', 'Dados Atualizados Com Sucesso.');
            return redirect('funcionario');
        } catch (Exception $exc) {
            Session::flash('flas_message', 'Erro -> ' . $exc->getTraceAsString());
        }
    }

    public function destroy($_funcionarioId)
    {
        try {

            $funcionario = Funcionario::findOrFail($_funcionarioId);
            
            $funcionario->delete();
            
            Session::flash('flash_message', 'Dados Atualizados Com Sucesso.');
        } catch (Exception $exc) {
            Session::flash('flas_message', 'Erro -> ' . $exc->getTraceAsString());
        }
    }

}
