<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-solid fa-house-user"></i><span>Inicio</span>
    </a>
    @can('Ver-Usuario')
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    @endcan  
    @can('Ver-rol')
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan  
    @can('Ver-formulario')
    <a class="nav-link" href="/blogs">
        <i class=" fas fa-solid fa-clipboard"></i><span>Formulario</span>
    </a>
    @endcan  
</li>
