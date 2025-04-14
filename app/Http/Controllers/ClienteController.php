<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

        {
            //select * from alunos
            $dados = Cliente::All();

            return view(
                'cliente.list',
                ['dados' => $dados]
            );
        }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaCliente::orderBy('nome')->get();

        return view('cliente.form', [
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

        Cliente::create($data);

        return redirect('aluno');
    }


    /**
     * Display the specified resource.
     */
    public function search(Cliente $cliente)
    {
        if (!empty($request->valor)) {
            //select * from cliente
            $dados = Cliente::where(
                $request->tipo,
                'like',
                "%$request->valor%"
            )->get();
        } else {
            $dados = Cliente::all();
        }

        return view(
            'cliente.list',
            ['dados' => $dados]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)

        {
            $dado = Cliente::findOrFail($id);

            $categorias = Cliente::orderBy('nome')->get();

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
    public function update(Request $request, Cliente $cliente)
    {
        $this->validateRequest($request);

        $data = $request->all();

        Aluno::updateOrCreate(
            ['id' => $id],
            $data
        );

        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //  dd("teste");
        $dado = Cliente::find($id);

        $dado->delete();

        return redirect('cliente');
    }
}
