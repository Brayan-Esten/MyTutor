
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">MyTutor</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search"> --}}
                <ul class="navbar-nav d-flex flex-row justify-content-around" style="width: 65%">

                    {{-- home nav --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" 
                        href="/">
                            Home
                        </a>
                    </li>

                    {{-- book a tutor nav --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('book*') ? 'active' : '' }}" 
                        href="/book">
                            Book-a-Tutor
                        </a>
                    </li>

                    {{-- upgrade membership nav --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('membership*') ? 'active' : '' }}" 
                        href="/membership">
                            Upgrade
                        </a>
                    </li>


                    {{-- about nav --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" 
                        href="/about">
                            About
                        </a>
                    </li>

                </ul>


        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark border-0">
                        Log Out
                        <span data-feather="log-out" class="align-text-bottom"></span>
                    </button>
                </form>
            </div>
        </div>
    </header>