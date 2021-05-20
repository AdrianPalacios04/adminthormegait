<!-- Navigation -->
<h6 class="navbar-heading text-muted">Menu</h6>
    <ul class="navbar-nav">
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/client">
                <i class="fa fa-users" aria-hidden="true"></i>USUARIO PANEL 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/acertijo">
                <i class="ni ni-air-baloon text-yellow"></i>EQUILICUA
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
                <i class="fab fa-optin-monster"></i> CARRERA
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/users">
                <i class="fa fa-gavel" aria-hidden="true" ></i> PLAYER 
            </a>
        </li>
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
        {{-- <li class="nav-item">
            <a class="nav-link" href="">
                <i class="ni ni-tv-2 text-primary"></i> Otros
            </a>
        </li> --}}
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
        
        {{-- <li class="nav-item">
            <a class="nav-link" href="/specialties">
                <i class="ni ni-planet text-blue"></i> Mis citas
            </a>
        </li> --}}
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