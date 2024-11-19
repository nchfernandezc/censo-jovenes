<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard') }}"><img src="https://via.placeholder.com/150" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="https://via.placeholder.com/50" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="https://via.placeholder.com/150" alt="profile" class="img-xs rounded-circle"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" style="pointer-events: none; background-color: #f8f9fa;">
            <i class="ti-user text-primary"></i>
            {{ Auth::user()->name }}
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item pl-4" href="{{ route('profile.edit') }}">
            <i class="ti-settings text-primary"></i>
            Configuración
            </a>
            <a class="dropdown-item pl-4" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="ti-power-off text-primary"></i>
            Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
    </button>
    </div>
</nav>
