<header class="fixed-top">
    <nav id="primary-header" class="navbar p-2 navbar-expand-lg d-flex">
        <img width="50" src="{{ asset('images/icon/logo2.png') }}" alt="logo" />
        <h6 class="text-light"  :class="{ 'text-dark' : show}">SPFULLSTAK.it</h6>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end px-3" id="navbarNav">
            <ul class="navbar-nav font-size">
                @if(url()->current() == url('/'))
                <li class="nav-item">
                    <a class="nav-link a-nav seguimi-btn" href="#seguimi">SEGUIMI</a>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link a-nav @if(url()->current() == url('/'))  a-nav-current  @endif" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav @if(url()->current() == url('/bio'))  a-nav-current  @endif" href="{{ route('guest.pages.bio.index') }}">CHI SONO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav @if(url()->current() == url('/projects'))  a-nav-current  @endif" href="{{ route('guest.pages.projects.index') }}">PROGETTI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav @if(url()->current() == url('/draws'))  a-nav-current  @endif" href="{{ route('guest.pages.draws.index') }}">DISEGNI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav @if(url()->current() == url('/cvitae'))  a-nav-current  @endif" href="{{ route('guest.pages.cvitae.index') }}">CURRICULUM VITAE</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link a-nav" href="{{ url('/naturando') }}">NATURANDO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-nav" href="{{ url('/dev') }}">DEV</a>
                </li> --}}


                {{-- <li class="nav-item d-flex align-items-center">
                    <i @click="show = !show" id="checkbox" class="fa fa-moon text-light nav-link a-nav" :class="{'fa-sun text-dark' : show}"></i>
                </li> --}}
                {{-- <li class="nav-item d-flex align-items-center ms-5">
                    @if (Route::has('login'))
                    <div>
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

        </li> --}}
        </ul>
        </div>

    </nav>
</header>
