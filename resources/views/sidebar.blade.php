<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        @guest
        <li class="nav-item t-center">
            <a class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item t-center">
                <a class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown t-center">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    </ul>

    <!-- - -->
    
</aside>