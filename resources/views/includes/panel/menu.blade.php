<!-- Navigation -->
<h6 class="navbar-heading text-muted">Menu</h6>
    <ul class="navbar-nav">
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/client">
                <i class="fa fa-users" aria-hidden="true"></i>Usuarios 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/acertijo">
                <i class="ni ni-air-baloon"></i>Crear Acertijo
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/race">
                <i class="fab fa-optin-monster"></i> Carrera
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/users">
                <i class="fa fa-gavel" aria-hidden="true" ></i> Usuario Thor
            </a>
        </li>
        @elseif(auth()->user()->role == 'acertijero')
        <li class="nav-item">
            <a class="nav-link" href="/acertijo">
                <i class="ni ni-air-baloon text-yellow"></i> Crear Acertijo
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="">
                <i class="ni ni-tv-2 text-primary"></i> Otros
            </a>
        </li> --}}
         @elseif(auth()->user()->role == 'supacertijero') 
        <li class="nav-item">
            <a class="nav-link" href="/acertijo">
                <i class="ni ni-tv-2 text-primary"></i> Acertijo
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="/specialties">
                <i class="ni ni-planet text-blue"></i> Mis citas
            </a>
        </li> --}}
        @endif
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
        document.getElementById('logout-from').submit();">
           <i class="fa fa-power-off" aria-hidden="true"></i>  {{ __('Logout') }}
        </a>
        <form id="logout-from" action="{{ route('logout') }}" method="post" style="display:none;"
        id="formLogout">
            @csrf
        </form>
        </li>
    </ul>