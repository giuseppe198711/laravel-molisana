
@extends('layouts.main')

@section('title')
  Prodotto singolo
@endsection

@section('mainContent')
  <div class="wrapper_prodotti_singoli">
    <div class="wrapper_titolo">
      <h1>{{$pasta['titolo']}}</h1>
    </div>

    <img src="{{$pasta['src-h']}}" alt="">
    <img src="{{$pasta['src-p']}}" alt="">
    <div class="wrapper_descrizione">
      <p class="descrizione_pasta">{!!$pasta['descrizione']!!}</p>
    </div>

    <div class="angle">
      <a href="{{route('prodotto-singolo', $id - 1)}}"><i class="fas fa-angle-left"></i></a>
      <a href="{{route('prodotto-singolo', $id + 1)}}"><i class="fas fa-angle-right"></i></a>
    </div>
  </div>




@endsection
