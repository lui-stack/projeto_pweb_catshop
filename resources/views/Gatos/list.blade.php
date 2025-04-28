@extends('layouts.app')

@section('title', 'Lista de Gatos')

@section('content')
    <h2>🐱 Lista de Gatos</h2>

    <a href="{{ route('gatos.create') }}" class="btn">Novo Gato</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Raça</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gatos as $gato)
                <tr>
                    <td>{{ $gato->id }}</td>
                    <td>{{ $gato->nome }}</td>
                    <td>{{ $gato->raca }}</td>
                    <td>
                        <a href="{{ route('gatos.edit', $gato->id) }}" class="btn-edit">Editar</a>
                        <form action="{{ route('gatos.destroy', $gato->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
