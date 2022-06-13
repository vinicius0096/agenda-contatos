@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>{{ $schedule->title }}</h3>
            <h5>{{ $schedule->description }}</h5>
            <a class="btn btn-primary" href="{{ route('records.create', ['id' => $schedule->id ]) }}" role="button">Criar contato</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">GitHub</th>
                </tr>
              </thead>
              <tbody>
                @foreach($records as $record)
                <tr>
                  <td><a href="{{ route('records.show', ['id' => $record->id ]) }}">{{$record->name}}</a></td>
                  <td>{{$record->email}}</td>
                  <td>{{$record->phone}}</td>
                  <td>{{$record->github_url}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
