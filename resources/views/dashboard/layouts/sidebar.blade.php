<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/schedule') ? 'active' : '' }}" href="/dashboard/schedule">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    My Schedule
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/history') ? 'active' : '' }}" href="/dashboard/history">
                    <span class="ms-1 me-1"><i class="bi bi-clock-history"></i></span>
                    History
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/fund">
                    <span class="ms-1 me-1"><i class="bi bi-cash"></i></span>
                    Add Fund
                </a>
            </li>
            <li class="nav-item">
                @if (session()->has('success_funding'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success_funding') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            </li>
        </ul>
    </div>
</nav>
