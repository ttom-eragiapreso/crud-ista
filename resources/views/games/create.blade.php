@extends('layout.main')

@section('content')
    <h1 class="text-center py-5">AGGIUNGI UN NUOVO GIOCO</h1>

    <form action="{{ route('games.store') }}" method="POST" class="w-50 m-auto">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome Gioco</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="New game...">
        </div>
        <div class="mb-3">
            <label for="genres" class="form-label">Generi</label>
            <input type="text" class="form-control" name="genres" id="genres" placeholder="Genres here...">
        </div>
        <div class="mb-3">
            <label for="developers" class="form-label">Sviluppatori</label>
            <input type="text" class="form-control" name="developers" id="developers" placeholder="Developers here...">
        </div>
        <div class="mb-3">
            <label for="publishers" class="form-label">Publishers</label>
            <input type="text" class="form-control" name="publishers" id="publishers" placeholder="Publishers here...">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" name="release" id="release" placeholder="Release date here...">
        </div>

        <button class="btn btn-success d-block w-50 m-auto my-5" type="submit">AGGIUNGI</button>
    </form>
@endsection
