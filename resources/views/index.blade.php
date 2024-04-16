@extends('layouts.base')

@section('content')
<div class="row">
  <div class="col-12">
    <div>
      <h2 class="text-white">CRUD de Tareas</h2>
    </div>
    <div>
      <a href="{{route('pokemons.create')}}" class="btn btn-primary">NUEVO POKEMON</a>
    </div>
  </div>

  @if (Session::get('success'))
  <div class="alert alert-success">
    <strong>{{Session::get('success')}}</strong><br><br>
  </div>
  @endif


  <div class="col-12 mt-4">
    <table class="table table-bordered text-white">
      <tr class="text-secondary">
        <th>Nº Pokedex</th>
        <th>Nombre</th>
        <th>Sprite</th>
        <th>Favorito</th>
      </tr>

      @foreach ($pokemons as $pokemon)
      <tr>
        <td class="fw-bold">{{$pokemon->pokedex}}</td>
        <td>{{$pokemon->nombre}}</td>
        <td>
          <!-- <img src={{$pokemon->imagen}} alt="Sprite" class="img-thumbnail"> -->
          <img src="{{$pokemon->imagen}}" alt="">
        </td>
        <td>
          <span class="badge bg-info fs-6">{{$pokemon->favorito}}</span>
        </td>

      </tr>
      @endforeach
    </table>
    {{$pokemons->links()}}
  </div>
</div>
@endsection