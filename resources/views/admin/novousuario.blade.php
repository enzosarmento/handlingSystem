@extends('layout')
@section('content')
    <h2 class="mt-3">Novo Usuário</h2>
    @if (isset($resp))
        <div class="alert alert-info">
            {{ $resp }}
        </div>
    @endif
    <form action="" method="post">
    @csrf
        <div class="col-12">
            <label for="">Login</label>
            <input type="text" name="login" id="" class="form-control">
        </div>
        <div class="col-12">
            <label for="">Senha</label>
            <input type="password" name="senha" id="" class="form-control">
        </div>
        <div class="col-12">
            <label for="">Nome</label>
            <input type="text" name="nome" id="" class="form-control">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-success mt-3">
    </form>
    @if (isset($lista))
        <table class="table table-condensed">
            <tr>
                <th>LOGIN</th>
                <th>NOME</th>
            </tr>
            @foreach ($lista as $usu)
                <tr>
                    <td>{{ $usu->login }}</td>
                    <td>{{ $usu->nome }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
