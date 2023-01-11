<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home')}}">
        <i class="fa-solid fa-home"></i>
        Acceuil
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articles')}}">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>  
        </ul>

        @if (Auth::user())
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
             <form action="{{ route('logout')}}" method="post">
              @csrf
              <button type="submit" class="btn primary">Déconnexion</button>
            </form>
            </li> 
          </ul>
        @else
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
              </li> 
            </ul> 
        @endif
        
      </div>
    </div>
  </nav>