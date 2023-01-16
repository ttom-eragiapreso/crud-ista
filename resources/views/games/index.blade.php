@extends('layout.main')

@section('content')

<div class="container">
    <h1>Games</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            <th scope="col">Developers</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $all_games as $game)
          <tr>
            <th scope="row">{{$game->id}}</th>
            <td>{{$game->name}}</td>
            <td>{{$game->developers}}</td>
            <td>xxxx</td>
          </tr>  
            @endforeach
        </tbody>
      </table>
      {{$all_games->links()}}
</div>

@endsection
