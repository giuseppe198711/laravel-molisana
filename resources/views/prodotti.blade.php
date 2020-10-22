{{-- sto prendendo il layouts dalla pagina main.blade in modo che la pagina
di base sia presente anche qui nella pagina prodotti --}}
@extends('layouts.main')

{{-- qui andiamo a cambiare ciò che si trova nel titolo --}}
@section('title')
  Prodotti
@endsection

{{-- qui andiamo a cambiare cio' che si trova nel mainContent --}}
@section('mainContent')
  <h1>Prodotti</h1>

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
@endsection
