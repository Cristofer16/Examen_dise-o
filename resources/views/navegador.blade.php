<nav class="main-menu">
    <ul>
        <li>
            <a href="{{ route('principal') }}">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                    Inicio
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('personal_ver_personal') }}">
                <i class="fa fa-user fa-2x"></i>
                <span class="nav-text">
                    Ver Personal
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('reg_personal') }}">
                <i class="fa fa-file-text fa-2x"></i>
                <span class="nav-text">
                    Registrar Personal
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('user_ver_user') }}">
                <i class="fa fa-users fa-2x"></i>
                <span class="nav-text">
                    Ver Usuarios
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('reg_user') }}">
                <i class="fa fa-file fa-2x"></i>
                <span class="nav-text">
                    Registrar Personal
                </span>
            </a>
        </li>
    </ul>

    <ul class="logout">
        <li>
            <a href="#">
                <i class="fa fa-power-off fa-2x"></i>
                <span class="nav-text">
                    Logout
                </span>
            </a>
        </li>
    </ul>
</nav>