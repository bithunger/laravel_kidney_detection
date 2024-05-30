<ul class="nav navbar-toolbar">
    @auth
        <li class="dropdown dropdown-user">
            <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                <img src="{{ asset('assets/backend/img/admin-avatar.png') }}" />
                <span>{{ auth()->user()->name ?? '' }}</span> <i class="fa fa-angle-down m-l-5"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </li>
    @endauth
</ul>
