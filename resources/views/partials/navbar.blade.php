<header class="fixed-top">
    <nav id="primary-header" class="navbar p-2 navbar-expand-lg d-flex" :class="{ 'light-header' : show}">
        <img width="50" src="{{ asset('images/icon/logo2.png') }}" alt="logo" />
        <h6>SPFULLSTAK.it</h6>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"  :class="{'black-icon' : show}"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav font-size">
                <li class="nav-item">
                    <a class="nav-link a-nav" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav" href="#biograpy">CHI SONO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav" href="#miei-lavori">PROGETTI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav" href="#cvitae">LE MIE COMPETENZE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav" href="#seguimi">SEGUIMI</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <i @click="show = !show" id="checkbox" class="fa fa-moon text-light nav-link a-nav" :class="{'fa-sun text-dark' : show}"></i>
                </li>
                <li class="nav-item d-flex align-items-center ms-5">
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                        <a href="{{ url('/dashboard') }}" class=" btn btn-sm btn-secondary">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-sm btn-secondary">Log in</a>
    
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-sm btn-secondary">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif

                </li>
            </ul>
        </div>

    </nav>
</header>