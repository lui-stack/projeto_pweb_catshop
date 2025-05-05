<?php

namespace App\Http\Controllers;

use App\Models\Gatos;
use Illuminate\Http\Request;

class GatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        //select * from alunos
        $dados = Gatos::All();

        return view(
            'Gatos.list',
            ['dados' => $dados]
        );
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaGatos::orderBy('nome')->get();

        return view('Gatos.form', [
            'categorias' => $categorias,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gatos $gatos)

    {
        $Gatos = Gatos::findOrFail($id);
        return view(
            'Gatos.form',
            [
                'Gatos' => $Gatos
            ]

        );

}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gatos $gatos)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:nome,raca',
            'cliente' => 'required',
        ]);
        $data = [
            'nome' => $request->nome,
            'raca' => $request->raca,
            'cliente' => $request->cliente,
        ];
        Gatos::updateOrCreate(
            ['nome' => $nome],
            $data
        );

        return redirect('Gatos');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gatos $gatos)
    {
        //  dd("teste");
        $dado = Gatos::find($id);

        $dado->delete();

        return redirect('Gatos');
    }
}
