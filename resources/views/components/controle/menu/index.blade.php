<div class="fixed-top" id="menu-controle">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="zoom nav-link" href="{{ route('austria.controle') }}">
            <img width="100px" src="/assets/img/austria.png" alt="">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('english.controle') }}">
            <img width="100px" src="/assets/img/reino-unido.png" alt="">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('portugues.controle') }}">
            <img width="100px" src="/assets/img/brasil.png" alt="">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('espanhol.controle') }}">
            <img width="100px" src="/assets/img/espanha.png" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        @guest
        @else
        <a class="nav-link" style="position: absolute;top: 0%;right: 0%;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Sair
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @endguest
      </li>
    </ul>
  </nav>
</div>