<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

        {
            //select * from alunos
            $funcionarios = Funcionario::All();

            return view(
                'funcionario.list',
                ['funcionarios' => $funcionarios]
            );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionario.form');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:funcionarios,cpf',
            'funcao' => 'required',
        ]);
        $data = [
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'funcao' => $request->funcao,
        ];


        Funcionario::create($data);

        return redirect('funcionario');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

        {
            $funcionario = Funcionario::findOrFail($id);
            return view(
                'cliente.form',
                [
                    'funcionario' => $funcionario
                ]

            );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:funcionarios,cpf',
            'funcao' => 'required',
        ]);
        $data = [
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'funcao' => $request->funcao,
        ];


        Funcionario::updateOrCreate(
            ['id' => $id],
            $data
        );

        return redirect('Funcionario');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dado = Funcionario::find($id);

        $dado->delete();

        return redirect('funcionario');
    }
    public function search(Request $request){
        if (!empty($request->value)) {
            $valor = $request->valor;
            $tipo = $request->tipo;

            $funcionarios = Funcionario::where($tipo, 'like', "%$valor%")->get();
            if (empty($funcionarios)) {
                return view("funcionario.list", ['funcionarios' => $funcionarios]);
            }
        }else{
            $funcionarios = Funcionario::All();
        }

        return view("funcionario.list", ['funcionarios' => $funcionarios]);

    }
}
