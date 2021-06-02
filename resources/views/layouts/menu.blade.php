<li class="nav-item {{ Request::is('alumnos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('alumnos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Alumnos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('docentes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('docentes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Docentes</span>
    </a>
</li>
