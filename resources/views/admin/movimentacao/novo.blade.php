@extends('layout')
@section('content')
    <h2 class="mt-3">Nova Movimentação</h2>
    @if (isset($resp))
    <div class="alert alert-info">
        {{ $resp }}
    </div>
    @endif
    <form action="" method="post">
    @csrf
        <div class="col-12">
            <label for="">Titulo</label>
            <input type="text" name="titulo" id="" class="form-control">
        </div>
        <div class="col-12 mt-2">
            <label for="">Tipo</label>
            <select name="tipo" id="" class="form-control">
                <option value="ENT">Entrada</option>
                <option value="SAI">Saída</option>
            </select>
        </div>
        <div class="col-12 mt-2">
            <label for="">Valor</label>
            <input type="text" name="valor" id="" class="form-control">
        </div>
        <div class="col-12 mt-2">
            <label for="">Categoria</label>
            <select class="form-control" name="categoria">
                <option value=""></option>
                @if (isset($categorias))
                    @foreach ($categorias as $c)
                        <option value="{{ $c->id }}">{{ $c->categoria }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-success mt-3">
    </form>
@endsection
