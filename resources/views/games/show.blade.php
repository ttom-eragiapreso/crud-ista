@extends('layout.main')

@section('content')

    <div class="container">
        <h1 class="mb-3">{{$game->name}}</h1>
        <a class="btn btn-warning" href="{{route('games.edit', $game)}}">Edit Game</a>
        <p class="my-3"><strong>Genres: </strong>{{$game->genres}}</p>
        <p class="mb-3"><strong>Developers: </strong>{{$game->developers}}</p>
        <p class="mb-3"><strong>Publishers: </strong>{{$game->publishers}}</p>
        <p><strong>Release: </strong>{{$game->release}}</p>
    </div>

@endsection
