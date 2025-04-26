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
            $dados = Funcionario::All();

            return view(
                'Funcionario.list',
                ['dados' => $dados]
            );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaFuncionario::orderBy('nome')->get();

        return view('Funcionario.form', [
            'categorias' => $categorias,
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);

        $data = $request->all();

        Funcionario::create($data);

        return redirect('funcionario');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)

        {
            $dado = Funcionario::findOrFail($id);

            $categorias = Funcionario::orderBy('nome')->get();

            return view(
                'cliente.form',
                [
                    'dado' => $dado,
                    'categorias' => $categorias
                ]
            );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $this->validateRequest($request);

        $data = $request->all();

        Funcionario::updateOrCreate(
            ['id' => $id],
            $data
        );

        return redirect('Funcionario');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        //  dd("teste");
        $dado = Funcionario::find($id);

        $dado->delete();

        return redirect('Funcionario');
    }
}
