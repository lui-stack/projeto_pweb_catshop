@extends('base')
@section('titulo', 'Listagem Cliente')
@section('conteudo')

    <h3>Listagem de Cliente</h3>

    <form action="{{ route('cliente.search') }}" method="post">
        @csrf
        <label for="">Tipo</label><br>
        <select name="tipo">
            <option value="nome">Nome</option>
            <option value="cpf">CPF</option>
            <option value="funcao">Função</option>
        </select><br>
        <input type="text" name="valor" placeholder="Valor">
        <button type="submit">Buscar</button>
        <a href="{{ url('cliente/create') }}">Novo</a>
    </form>

    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>Função</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cpf }}</td>
                    <td>{{ $item->funcao }}</td>
                    <td>{{ $item->categoria->nome ?? '' }}</td>
                    <td>
                        <a href="{{ route('cliente.edit', $item->id) }}">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('cliente.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('Deseja remover o registro?')">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
