@yield('nav-bar')


<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container">
        <a class="fs-1  fw-bold navbar-brand" href="#"> {{ config('app.name') }} </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- @auth --}}
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item col-2">
                        <a class="nav-link text-center @if (Request::route()->getName() == 'app_home') nav-link-active @endif" aria-current="page"
                            href="{{ route('app_home') }}">Home</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link @if (Request::route()->getName() == 'app_presentation') active @endif " aria-current="page"
                            href="{{ route('app_presentation') }}">Presentation</a>
                    </li> --}}

                    <li class="nav-item col-2">
                        <a class="nav-link text-center @if (Request::route()->getName() == 'app_presentation') nav-link-active @endif " aria-current="page"
                            href="#">Location</a>
                    </li>

                    <li class="nav-item col-2">
                        <a class="nav-link @if (Request::route()->getName() == 'app_presentation') nav-link-active @endif " aria-current="page"
                            href="#">Achat</a>
                    </li>

                    <li class="nav-item col-2">
                        <a class="nav-link text-center @if (Request::route()->getName() == 'app_presentation') nav-link-active @endif " aria-current="page"
                            href="#">Projet</a>
                    </li>

                    <li class="nav-item col-2">
                        <a class="nav-link @if (Request::route()->getName() == 'app_presentation') nav-link-active @endif " aria-current="page"
                            href="#">Contact</a>
                    </li>


                    <li class="nav-item col-2">
                        <a class="nav-link text-center @if (Request::route()->getName() == 'app_presentation') nav-link-active @endif " aria-current="page"
                            href="{{ route('app_dashbord') }}">Dashbord</a>
                    </li>

                </ul>
            {{-- @endauth    --}}


        </div>
        <!-- Example single danger button -->
        <div class="btn-group">
            @guest
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Mon compte
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>

                </ul>
            @endguest

            @auth
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    {{-- <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li> --}}

                </ul>
            @endauth

        </div>

    </div>

</nav>
