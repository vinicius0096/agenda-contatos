@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Nome: {{ $record->name }}</h3>
            <h5>Email: {{ $record->email }}</h5>
            <h5>Telefone: {{ $record->phone }}</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Nome completo</th>
                </tr>
              </thead>
              <tbody>
                @foreach(json_decode($repositories) as $repository)
                <tr>
                  <td>{{$repository->name}}</td>
                  <td>{{$repository->full_name}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
