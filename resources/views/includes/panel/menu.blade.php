<!-- Navigation -->
<h6 class="navbar-heading text-muted">Menu</h6>
    <ul class="navbar-nav">
        {{-- ADMINISTRADOR TOTAL --}}
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/client">
                <i class="fas fa-users-cog"></i>USUARIO PANEL 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/acertijo">
                <i class="ni ni-air-baloon"></i>EQUILICUA
            </a>
        </li>
        <div class="nav-item">
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink2">
                    <i class="fa fa-gavel" aria-hidden="true" ></i>  JUEGO THOR 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <li>
                        <a class="dropdown-item" href="/ticket">
                            <i class="fas fa-ticket-alt"></i> Tickets
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/cash">
                            <i class="far fa-money-bill-alt"></i> Cash
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <li class="nav-item">
            <a class="nav-link" href="/race">
                <i class="fas fa-flag-checkered"></i> CARRERAS
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/publicidad">
                <i class="fab fa-adversal"></i> PUBLICIDAD
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/users">
                <i class="fas fa-users"></i> PLAYER 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/codes">
                <i class="fas fa-ticket-alt"></i> CÓDIGOS PROMOCIÓN 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/reclamo">
                <i class="far fa-handshake"></i> RECLAMO
            </a>
        </li>
        {{-- ACERTIJERO --}}
        @elseif(auth()->user()->role == 'acertijero')
        <li class="nav-item">
            <a class="nav-link" href="/acertijo">
                <i class="ni ni-air-baloon text-yellow"></i> EQUILICUA
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/cash">
                <i class="fa fa-gavel" aria-hidden="true" ></i> JUEGO THOR
            </a>
        </li>
        {{-- SUPERVISOR DE ACERTIJERO --}}
         @elseif(auth()->user()->role == 'supacertijero') 
        <li class="nav-item">
            <a class="nav-link" href="/acertijo">
                <i class="ni ni-air-baloon text-yellow"></i> EQUILICUA
            </a>
        </li>
        <div class="nav-item">
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink2">
                    <i class="fa fa-gavel" aria-hidden="true" ></i>  JUEGO THOR 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <li>
                        <a class="dropdown-item" href="/ticket">
                            <i class="fas fa-ticket-alt"></i> Tickets
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/cash">
                            <i class="far fa-money-bill-alt"></i> Cash
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- ADMINISTRADOR DE PUBLICIDAD  --}}
        @elseif(auth()->user()->role == 'adminpublicidad') 
        <li class="nav-item">
            <a class="nav-link" href="/publicidad">
                <i class="fab fa-adversal"></i> PUBLICIDAD
            </a>
        </li>
        {{-- ADMINISTRADOR DE USUARIOS DEL JUEGO --}}
        @elseif(auth()->user()->role == 'adminusuario') 
        <li class="nav-item">
            <a class="nav-link" href="/users">
                <i class="fab fa-adversal"></i> PLAYER
            </a>
        </li>
        {{-- ADMINISTRADOR DE CODIGOS TICKET PROMOCION --}}
        @elseif(auth()->user()->role == 'adminticket') 
        <li class="nav-item">
            <a class="nav-link" href="/codes">
                <i class="fab fa-adversal"></i> CODIGOS PROMOCIÓN
            </a>
        </li>
        {{-- ADMINISTRADOR DE RECLAMOS --}}
        @elseif(auth()->user()->role == 'adminreclamo') 
        <li class="nav-item">
            <a class="nav-link" href="/claim">
                <i class="fab fa-adversal"></i> RECLAMO
            </a>
        </li>
        {{-- ADMINISTRADOR DE CARRERAS --}}
        @elseif(auth()->user()->role == 'admincarrera') 
        <li class="nav-item">
            <a class="nav-link" href="/race">
                <i class="fab fa-adversal"></i> CARRERAS
            </a>
        </li>
        {{-- SUPERVISOR DE CARRERAS --}}
        @elseif(auth()->user()->role == 'supcarrera') 
        <li class="nav-item">
            <a class="nav-link" href="/race">
                <i class="fab fa-adversal"></i> CARERRAS
            </a>
        </li>
        @endif
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
        document.getElementById('logout-from').submit();">
           <i class="fa fa-power-off" aria-hidden="true"></i>  {{ __('LOGOUT') }}
        </a>
        <form id="logout-from" action="{{ route('logout') }}" method="post" style="display:none;"
        id="formLogout">
            @csrf
        </form>
        </li>
    </ul>