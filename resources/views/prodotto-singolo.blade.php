
@extends('layouts.main')

@section('title')
  Prodotto singolo
@endsection

@section('mainContent')
<h1>{{$pasta['titolo']}}</h1>
<img src="{{$pasta['src-h']}}" alt="">
<img src="{{$pasta['src-p']}}" alt="">
<p>{!!$pasta['descrizione']!!}</p>
@endsection
