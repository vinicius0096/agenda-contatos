@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Criar contato</h2>
            <form method="POST" action="{{route('records.store', ['id' => app('request')->input('id') ])}}">
              @csrf
              <label for="Titulo">Nome</label>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Titulo" placeholder="Adicione um nome" aria-describedby="inputGroup-sizing-sm" name="name">
              </div>
              <label for="Titulo">E-mail</label>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Titulo" placeholder="Adicione um e-mail" aria-describedby="inputGroup-sizing-sm" name="email">
              </div>
              <label for="Descrição">Telefone</label>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Titulo" placeholder="Adicione um telefone" aria-describedby="inputGroup-sizing-sm" name="phone">
              </div>
              <label for="Titulo">URL do GitHub</label>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Titulo" placeholder="Adicione uma URL válida" aria-describedby="inputGroup-sizing-sm" name="github_url">
              </div>
              <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection
