<nav id="nav" class="my-nav navbar navbar-fixed-top navbar-light navbar-expand-lg ">
    <div class="container text-light">
        <a href="{{route('inicio')}}" class="navbar-brand d-flex w-50 me-auto">
            <img src="http://siafeson.com/assets/customs/siafeson/img/sia_logo2.png" alt="Logo Siafeson">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 " id="collapsingNavbar">
            <ul class="navbar-nav w-100 justify-content-center ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('conocenos')}}">Conócenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Enlaces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Formatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Apks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Manuales</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Acceder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registro</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Sitios
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
                        
                        <li><a class="dropdown-item" href="{{ route('sites.index') }}">Administración</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        @foreach ($sites as $site)
                            <li><a target="_blank" class="dropdown-item"
                                    href="{{ $site->url }}">{{ $site->name }}</a></li>
                        @endforeach
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
