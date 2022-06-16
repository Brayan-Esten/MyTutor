    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: var(--grey); ">
        <div class="container-fluid d-flex justify-content-around">


            {{-- left nav --}}
            <a class="navbar-brand" href="/">
                MyTutor
            </a>

            {{-- ga terlalu penting, ini toggle klo screeny kecil, kita fokus ukuran laptop/pc --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            {{-- mid nav --}}
            <div id="navbarNav" style="width: 65%;">
                <ul class="navbar-nav d-flex justify-content-around">

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

            </div>


            {{-- right nav --}}
            <div>
                <ul class="navbar-nav ms-auto">

                    @auth
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                
                                {{-- edit profile btn --}}
                                <li>
                                    <a class="dropdown-item" href="/dashboard">
                                        <i class="bi bi-layout-text-sidebar-reverse"></i>
                                        Dashboard
                                    </a>
                                </li>


                                {{-- log out btn --}}
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right"></i>
                                            Log Out
                                        </button>
                                    </form>
                                </li>

                            </ul>

                        </li>

                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Log In
                            </a>
                        </li>

                    @endauth

                </ul>
            </div>

        </div>
    </nav>
