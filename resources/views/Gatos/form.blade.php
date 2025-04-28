@extends('layouts.app')

@section('title', isset($gato) ? 'Editar Gato' : 'Novo Gato')

@section('content')
    <h2>{{ isset($gato) ? 'Editar Gato' : 'Cadastrar Novo Gato' }}</h2>

    <form action="{{ isset($gato) ? route('gatos.update', $gato->id) : route('gatos.store') }}" method="POST">
        @csrf
        @if(isset($gato))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $gato->nome ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="raca">Raça:</label>
            <input type="text" name="raca" id="raca" value="{{ old('raca', $gato->raca ?? '') }}" required>
        </div>

        <button type="submit" class="btn">{{ isset($gato) ? 'Atualizar' : 'Salvar' }}</button>
    </form>

@endsection
