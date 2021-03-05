<header>
  <div class="left">
    <img class="logo" src="{{ asset("img/logo.png") }}" alt="logo">
  </div>

  <div class="right">
    <ul id="header-list">
      @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
      @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right"
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </li>
        <li>
          @if (Auth::user()->avatar)
            <a href="#"><img class="avatar_img" src="{{ asset("storage/" . Auth::user()->avatar) }}" alt="user-avatar"></a>
          @else
            <a href="#"><img class="avatar_img" src="{{ asset("img\user-avatar-default.png") }}" alt="user-avatar-default"></a>
          @endif
        </li>
      @endguest
    </ul>
  </div>
</header>
