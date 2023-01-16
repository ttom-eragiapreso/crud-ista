@extends('layout.main')

@section('content')
  <div class="container">
    <form action="{{ route('games.update', $game) }}" method="POST">
      @method('PUT')
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Game Name</label>
        <input type="text" name="name" class="form-control" id="name"
          placeholder="The name of your game" value="{{ $game->name }}">
      </div>
      <div class="mb-3">
        <label for="genres" class="form-label">Game Genres</label>
        <input type="text" name="genres" placeholder="The genres of your games"
          value="{{ $game->genres }}">
      </div>
      <div class="mb-3">
        <label for="developers" class="form-label">Game developers</label>
        <input type="text" name="developers" placeholder="The developers of your games"
          value="{{ $game->developers }}">
      </div>
      <div class="mb-3">
        <label for="publishers" class="form-label">Game publishers</label>
        <input type="text" name="publishers" placeholder="The publishers of your games"
          value="{{ $game->publishers }}">
      </div>


      <button class="btn btn-info">Salva</button>
    </form>
  </div>
@endsection
