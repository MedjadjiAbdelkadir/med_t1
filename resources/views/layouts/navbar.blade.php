<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img id="acc" alt="/"
                            src="https://res.cloudinary.com/dtvc2pr8i/image/upload/w_150,f_auto/v1627577895/myballot/users/user_znc23a.png"
                            width="50">
                    </a>
                    <div class="dropdown-menu" style="margin-left:-100px" aria-labelledby="navbarDropdown">
                        @if (auth()->user()->role == 'admin')
                            <a class="dropdown-item" href="#">Utilisateurs</a>
                        @endif

                        @if (auth()->user()->role == 'user')
                            <a class="dropdown-item" href="#">Profile</a>
                        @endif
                        <div class="dropdown-divider"></div>

                        {{-- <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                        <a href="{{ route('auth.logout') }}" 
                        class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Se Déconnecte
                        </a> --}}

                        <a class="dropdown-item" href="{{ route('auth.logout') }}">Se Déconnecter</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
