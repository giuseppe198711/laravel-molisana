{{-- sto prendendo il layouts dalla pagina main.blade in modo che la pagina
di base sia presente anche qui nella pagina prodotti --}}
@extends('layouts.main')

{{-- qui andiamo a cambiare ciò che si trova nel titolo --}}
@section('title')
  News
@endsection

{{-- qui andiamo a cambiare cio' che si trova nel mainContent --}}
@section('mainContent')
  <h1>News</h1>
@endsection
