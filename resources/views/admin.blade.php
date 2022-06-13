<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Admin Dashboard</a>
          <a href="/admin/logout">Logout</a>
        </div>
      </nav>

    <table class="table">
      <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Quem criou</th>
          </tr>
      </thead>
        <tbody>
            @foreach($schedules as $schedule)
              <tr>
                <td><a href="{{ route('schedules.show', ['id' => $schedule->id ]) }}">{{$schedule->title}}</a></td>
                <td>{{$schedule->description}}</td>
                <td>{{ App\Models\User::find($schedule->user_id)->name }}</td>
              </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>