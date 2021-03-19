@extends('layoutlogin')
@section('content')
<div class="card mt-4">
    <h5 class="card-header">LOGIN DO SISTEMA</h5>
    @if (isset($resp))
    <div class="alert alert-info">
        {{ $resp }}
    </div>
    @endif
    <div class="card-body">
        <form method="post">
@csrf
            <div class="col-12">
                <label for="">Login</label>
                <input type="text" name="login" id="" class="form-control">
            </div>
            <div class="col-12">
                <label for="">Senha</label>
                <input type="password" name="senha" id="" class="form-control">
            </div>
            <div class="col-12 mt-4">
                <input type="submit" value="LOGAR" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

@endsection
