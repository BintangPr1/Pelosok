<style>
    .judul{
      font-family: 'Satisfy', cursive;
    }
    .sub-judul{
      font-family: 'Quicksand';
    }
    /* #nav-list{
        color: white;
    } */
  </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand judul col-3" style="color: #A9661F; margin-left: 3rem; font-size: 30px;" href="{{ route('home') }}">Pelosok</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="display: flex; justify-content:end;" class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('main') }}">New Arival</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">MensWear</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">GirlsWear</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('cart') }}">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('profile') }}">Account</a>
            </li>
          @auth
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
            </li>
          @endauth
          
          </ul>
          {{-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form> --}}
      </div>
    </div>
  </nav>
