@extends('layout.main')

@section('content')
  <div class="container">
    <h1 class="mb-4">Games</h1>

    {{-- <a href="{{ route('games.create') }}">Crea un nuovo game</a> --}}

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Developers</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($all_games as $game)
          <tr>
            <th scope="row">{{ $game->id }}</th>
            <td>{{ $game->name }}</td>
            <td>{{ $game->developers }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('games.show', $game) }}">Vai</a>
              <a class="btn btn-warning" href="{{ route('games.edit', $game) }}">Edita</a>
              <form action="{{ route('games.destroy', $game) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Confermi l\'eliminazione di: {{ $game->name }}?')"
                class="d-inline" action="{{ route('games.destroy', $game) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $all_games->links() }}
  </div>
@endsection
