<!-- header -->
<header>
  <div class="logo">
    <img class="logo" src="{{asset('images/logo-molisana.png')}}" alt="logo">
  </div>
  <nav class="main-nav">
    <ul class="main-nav-list">
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a class="active" href="{{route('pasta')}}">Prodotti</a></li>
      {{-- il {{route('notizie')}} è collegato alla 'web.php ved. spieg.' --}}
      <li><a href="{{route('notizie')}}">News</a></li>

    </ul>

  </nav>

</header>
<!-- /header -->
