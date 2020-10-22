@php

//questo è un formato json

$data = config("pasta");



    $lunga = [];
    $corta = [];
    $cortissima = [];


    foreach ($data as $key => $prodotto) {
      $prodotto["id"] = $key;
      if($prodotto["tipo"] == "lunga") {
        $lunga[] = $prodotto;

      } elseif($prodotto["tipo"] == "corta") {
        $corta[] = $prodotto;

      } elseif($prodotto["tipo"] == "cortissima") {
        $cortissima[] = $prodotto;
      }

    }
    @endphp

    @extends('layouts.main')

    @section('mainContent')
      {{-- abbiamo inserito limmagine di background
      solo nella pagina home --}}
      <div class="container-image">


      @if(!empty($lunga))
      <h2>Lunga</h2>
      <ul class="main-list">
        @foreach ($lunga as $prodotto)
        <li>
          <img src="{{$prodotto['src']}}" alt="">
          <div class="layover">

            <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto['titolo']}}</h3></a>

            <img class="icon" src="{{asset('images/icon.svg')}}" alt="">

          </div>

        </li>
        @endforeach
      </ul>
      @endif

      @if(!empty($corta))
      <h2>Corta</h2>
      <ul class="main-list">
        @foreach ($corta as $prodotto)
        <li>

          <img src="{{$prodotto['src']}}" alt="">
          <div class="layover">

            <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto['titolo']}}</h3></a>
            <img class="icon" src="{{asset('images/icon.svg')}}" alt="">

          </div>

        </li>
        @endforeach
      </ul>
      @endif


      @if(!empty($cortissima))
      <h2>Cortissima</h2>
      <ul class="main-list">
        @foreach ($cortissima as $prodotto)
        <li>
          <img src="{{$prodotto['src']}}" alt="">
          <div class="layover">

            <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto['titolo']}}</h3></a>
            <img class="icon" src="{{asset('images/icon.svg')}}" alt="">

          </div>

        </li>
        @endforeach
      </ul>
      @endif
   </div>
    @endsection
