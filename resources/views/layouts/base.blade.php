<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>RANDOMIZADOR DE EQUIPOS POKEMON</title>
</head>

<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex-col content-center justify-around">

  <header class="m-5 ">
    <div class='flex justify-around items-center bg-gradient-to-r from-slate-900 via-slate-700 to-slate-800 rounded-3xl p-9 w-9/1 shadow-lg'>
      <div class="flex gap-3">
        <img class="h-10 " src="https://cdn.icon-icons.com/icons2/851/PNG/512/Ultra_Ball_icon-icons.com_67500.png" alt="">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/0/0c/Shuffle094.png" alt="">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/0/0c/Shuffle011.png" alt="">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/8/85/Shuffle039.png" alt="">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/e/eb/Shuffle131.png" alt="">
      </div>
      <h1 class="text-center  self-center text-yellow-400 font-extrabold text-6xl">POKE-RANDOM </h1>
      <div class="flex gap-3">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/f/f9/Shuffle100.png" alt="">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/f/f3/Shuffle197.png" alt="">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/4/49/Shuffle239.png" alt="">
        <img class="h-10 " src="https://archives.bulbagarden.net/media/upload/3/3e/Shuffle298.png" alt="">
        <img class="h-10 " src="https://cdn.icon-icons.com/icons2/851/PNG/512/Ultra_Ball_icon-icons.com_67500.png" alt="">
      </div>
    </div>

  </header>

  <main class="flex-col align-middle">
    <form class="grid place-content-center" action="{{route('pokemons')}}" method="GET">
      @csrf
      <button class="" type="submit">
        <img class="rounded-xl h-14 bg-yellow-500 hover:bg-yellow-600 p-3" src="https://static-00.iconduck.com/assets.00/shuffle-icon-512x463-bhh93rt9.png" alt="">
      </button>
    </form><br><br>

    <div class="grid grid-cols-3 gap-32 max-w-4xl mx-auto place-items-center">
      @yield('content')
    </div>
    <br><br>

  </main>



  <footer class=" align-baseline ">
    <div class="flex flex-row items-center justify-between px-10">
      <img class="h-6" src="https://cdn.icon-icons.com/icons2/2248/PNG/512/pokeball_icon_136305.png" alt="">
      <p class="font-bold text-blue-950">© 2024 - RANDOMIZADOR DE EQUIPOS POKEMON</p>
      <img class="h-6" src="https://cdn.icon-icons.com/icons2/2248/PNG/512/pokeball_icon_136305.png" alt="">
    </div>
  </footer>

</body>


</html>