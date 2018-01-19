<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Videoclub</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('login') && ! Request::is('login')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/login')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Login
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('invitar') && ! Request::is('invitar')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/invitar')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Invitar
                        </a>
                    </li>

                     <li class="nav-item {{ Request::is('verConsulta') && ! Request::is('verConsulta')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/verConsulta')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Ver Consulta
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('crearConsult	a') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/crearConsulta')}}">
                            <span>&#10010</span> Crear Consulta
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
