@extends('layouts.base')

@section('content')


@if ($errors->any())
<div class="alert alert-danger">
  <strong>Algo fue mal..</strong><br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@foreach ($equipo as $pokemon)
<div class="">

  <div class="w-80 bg-white rounded-2xl border-s-8 border-zinc-800 flex flex-col items-center">

    <p class="m-5 p-2 bg-white text-red-600 rounded-2xl font-bold">Nº - {{$pokemon['id']}}</p>
    <p><img class="rounded-bl-[190px] w-[280px] m-2 border-b-8 border-slate-800 shadow-[-30px_60px_92px_-63px_rgba(0,0,0,0.45)]" src="{{$pokemon['imagen']}}" alt="Imagen de Pokemon">
    <p class="rounded-xl text-center w-[90%] m-3 p-2 bg-red-800 text-bold text-white">{{$pokemon['nombre']}}</p><br>

    <div class="w-[90%] p-5  bg-slate-300 rounded-xl mx-5 border-3 border-red-600 ">
      @foreach ($pokemon['stats'] as $habilidades)
      <p class="flex flex-row justify-between items-center"> <span class="font-bold uppercase">{{$habilidades['stat']['name']}} </span>
        <span class="font-bold text-orange-700 p-3 ">{{$habilidades['base_stat']}} </span>
      </p>
      @endforeach
    </div>
    <br>

    <p class="text-center w-[90%] m-3 p-2 bg-amber-200 text-orange-700 rounded-2xl font-bold">{{$pokemon['tipo']}}</p>
  </div>
</div>
@endforeach

@endsection