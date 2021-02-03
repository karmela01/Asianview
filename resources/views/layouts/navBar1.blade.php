<nav class="navbar navbar-expand-lg navbar-info bg-secondary text-white">
  <a class="navbar-brand text-primary" href="{{route('movie.index')}}"><h4 class="font-weight-light font-italic Italica"><b><span class="text-danger lead">A</span>ssian<span class="text-danger lead">V</span>iew</b></h4></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="{{route('movie.index')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      @auth
      <li class="nav-item active">
          <a class="nav-link text-dark" href="{{route('movie.create')}}">Nueva Pelicula <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item active">
        <a class="nav-link text-dark" href="{{route('user.index')}}">Users <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-dark" href="{{route('people.index')}}">People <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-dark" href="{{route('genre.index')}}">Genres <span class="sr-only">(current)</span></a>
      </li>
      @endauth
      <li class="nav-item active">
          <a class="nav-link text-dark" href="{{route('login')}}">Login <span class="sr-only">(current)</span></a>
        </li>
        @auth

        <li class="nav-item active">
            <a class="nav-link text-dark" href="{{route('register')}}">Logout <span class="sr-only">(current)</span></a>
          </li>
          @endauth
    </ul>
    <form class="form-inline my-2 my-lg-0 text-dark">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
