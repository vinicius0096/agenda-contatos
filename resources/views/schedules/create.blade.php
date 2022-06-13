@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Criar lista</h2>
            <form method="POST" action="{{route('schedule.store')}}">
              @csrf
              <label for="Titulo">Título</label>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Titulo" placeholder="Adicione um título" aria-describedby="inputGroup-sizing-sm" name="title">
              </div>
              <label for="Descrição">Descrição</label>
              <div class="input-group input-group-sm mb-3">
                  <textarea class="form-control" aria-label="With textarea" placeholder="Adicione uma descrição" name="description"></textarea>
              </div>
              <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection
