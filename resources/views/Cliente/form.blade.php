@extends('base')
@section('titulo', 'Formulário cliente')
@section('conteudo')

    <h3>Formulário Aluno</h3>

    @php
        if (!empty($dado->id)) {
            $action = route('cliente.update', $dado->id);
        } else {
            $action = route('cliente.store');
        }
    @endphp

    <form action="{{ $action }}" method="post">
        @csrf

        @if (!empty($dado->id))
            @method('put')
        @endif

        <label for="">Nome</label><br>
        <input type="text" name="nome" value="{{ old('nome', $dado->nome ?? '') }}"><br>

        <label for="">CPF</label><br>
        <input type="text" name="cpf" value="{{ old('cpf', $dado->cpf ?? '') }}"><br>

        <label for="">Telefone</label><br>
        <input type="text" name="função" value="{{ old('função', $dado->função ?? '') }}"><br>

        <label for="">Categoria</label><br>
        <select name="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}"
                    {{ old('categoria_id', $dado->categoria_id ?? '')
                         == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nome }}
                </option>
            @endforeach
        </select>


        <button type="submit">Salvar</button><br>
        <a href="{{ url('aluno') }}">Voltar</a>

    </form>

@stop
