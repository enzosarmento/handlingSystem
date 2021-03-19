@extends('layout')
@section('content')
    <h2 class="mt-3">Movimentação</h2>
    <form action="" method="post">
    @csrf
        <div class="col-12 mt-2">
            <label for="">Tipo</label>
            <select name="tipo" id="" class="form-control">
                <option value=""></option>
                <option value="ENT">Entrada</option>
                <option value="SAI">Saída</option>
            </select>
        </div>
        <input type="submit" value="Buscar" class="btn btn-primary mt-4">
        <a href="{{ route('admin.movimentacao.export') }}" class="btn btn-danger mt-4">Gerar PDF</a>
    </form>
    @if (isset($lista))
    <table class="table table-condensed">
        <tr>
            <th>TITULO</th>
            <th>TIPO</th>
            <th>VALOR</th>
            <th>DATA MOVIMENTACAO</th>
            <th>USUARIO</th>
            <th>CATEGORIA</th>
        </tr>
        @foreach ($lista as $mov)
        <tr>
            <td>{{ $mov->titulo }}</td>
            <td>{{ $mov->getTipoDesc() }}</td>
            <td>R$ {{ $mov->valor }}</td>
            <td>{{ $mov->data_movimentacao->format('d/m/Y') }}</td>
            <td>{{ $mov->usuario->nome }}</td>
            <td>{{ $mov->categoria->categoria }}</td>
        </tr>
        @endforeach
    </table>
    @endif
@endsection
