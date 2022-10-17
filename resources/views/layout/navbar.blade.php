<nav class="navbar navbar-expand-lg" style="background-color:#F5B7B1;">
    <div class="container-fluid container">
        <a class="navbar-brand" href="#" style="color:#212F3D">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest()
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('RegPage')}}" style="color:#212F3D">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth')}}" style="color:#212F3D">Авторизация</a>
                </li>
                @endguest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#212F3D">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                @auth()
                    @if(\Illuminate\Support\Facades\Auth::user()->is_admin==1)
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#212F3D">Админ</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('newCategory')}}">Добавить категорию</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                    @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Выход</a>
                </li>
                @endauth
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" >Search</button>
            </form>
        </div>
    </div>
</nav>
