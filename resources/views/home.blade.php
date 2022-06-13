@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href="{{ route('schedule.create') }}" role="button">Adicionar</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Descrição</th>
                </tr>
              </thead>
              <tbody>
                @foreach($schedules as $schedule)
                    <tr>
                      <td><a href="{{ route('schedules.show', ['id' => $schedule->id ]) }}">{{$schedule->title}}</a></td>
                      <td>{{$schedule->description}}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
