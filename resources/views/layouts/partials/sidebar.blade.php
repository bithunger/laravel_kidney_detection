<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            @auth
                <div>
                    <img class="rounded-circle" width="45px" src="{{ asset('assets/backend/img/admin-avatar.png') }}"
                        width="45px" />
                </div>
                <div class="admin-info">
                    <div class="font-strong"></div><small>{{ auth()->user()->name }}</small>
                </div>
            @endauth
        </div>
        <ul class="side-menu metismenu">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ '/' }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('upload-kidney-image') ? 'active' : '' }}">
                <a href="{{ url('upload-kidney-image') }}"><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Detection</span>
                </a>
            </li>

            @auth
                <li class="{{ Request::is('admin/detection-model-setting') ? 'active' : '' }}">
                    <a href="{{ route('detection.model.index') }}"><i class="sidebar-item-icon fa fa-sticky-note"></i>
                        <span class="nav-label">Model Setting</span>
                    </a>
                </li>
            @endauth

        </ul>
    </div>
</nav>
