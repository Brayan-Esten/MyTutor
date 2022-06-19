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
        </ul>
    </div>
</nav>
