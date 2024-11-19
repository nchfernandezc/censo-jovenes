<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('registro.index') }}">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Registrar</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('vista.index') }}">
            <i class="icon-grid-2 menu-icon"></i>
            <span class="menu-title">Ver Registros</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('registro.buscar') }}">
            <i class="icon-search menu-icon"></i>
            <span class="menu-title">Búsqueda</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('registro.filtrar') }}">
            <i class="icon-file menu-icon"></i>
            <span class="menu-title">Reportes</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="icon-contract menu-icon"></i>
            <span class="menu-title">Cerrar Sesión</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
    </ul>
</nav>
