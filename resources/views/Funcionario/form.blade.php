@@extends('layouts.app')

@section('title', isset($funcionario) ? 'Editar Funcionário' : 'Novo Funcionário')

@section('content')
    <h2>{{ isset($funcionario) ? 'Editar Funcionário' : 'Cadastrar Novo Funcionário' }}</h2>

    <form action="{{ isset($funcionario) ? route('funcionarios.update', $funcionario->id) : route('funcionarios.store') }}" method="POST">
        @csrf
        @if(isset($funcionario))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $funcionario->nome ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $funcionario->cpf ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="funcao">Função:</label>
            <input type="text" name="funcao" id="funcao" value="{{ old('funcao', $funcionario->funcao ?? '') }}" required>
        </div>

        <button type="submit" class="btn">{{ isset($funcionario) ? 'Atualizar' : 'Salvar' }}</button>
    </form>

@endsection
