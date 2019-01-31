
        {{--  <nav class="navbar navbar-dark bg-dark">  --}}
   {{--  <nav class="navbar navbar-expand-lg navbar-invase bg-dark">
        <a class="navbar-brand" href="/">{{ config('APP.NAME','myapp') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

                <div class="container">
                     <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'MYAPP') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                  <li class="nav-item active">
                                    <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="/about">About us</a>
                                  </li>
                                  <li class="nav-item">
                                          <a class="nav-link" href="/contact">contact</a>
                                        </li>
                                        <li class="nav-item">
                                              <a class="nav-link" href="service">services</a>
                                            </li>
                                            <li class="nav-item">
                                                  <a class="nav-link" href="/posts">Blog</a>
                                                </li>
                                </ul>

                              </div>




                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                            <ul class=' dropdown-menu' role="menu">
                                                    <li><a class="dropdown-item" href='/dashboard'>Dashboard</a></li>

                                        <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

