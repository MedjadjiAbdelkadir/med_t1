<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ayrad | Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>

    <body style="background-color:#F3F5F8  ;font-family: poppins">
        <div class="app-section">
            <div class="login-page" style="background-image: url({{ asset('assets/images/login-bg.jpg') }})">
                <div class="container">
                    <div class="col-xl-12 col-lg-12 col-md-12 login-container">
                        <div class="login-form">
                            <h5 class="text-capitalize" style="font-weight: bold">Créer un nouveau compte (Admin)</h5>
                            <form method="POST" action="{{ route('auth.admin.register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group mb-2">
                                        <label for="first_name">Prénom</label>
                                        <input type="text" autofocus
                                            class="form-control  @error('first_name') is-invalid @enderror" id="first_name"
                                            name="first_name" value="{{ old('first_name') }}" placeholder="Écris le prénom">
                                        @error('first_name')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group mb-2">
                                        <label for="last_name">Nom</label>
                                        <input type="text" 
                                            class="form-control  @error('last_name') is-invalid @enderror" id="last_name"
                                            name="last_name" value="{{ old('last_name') }}" placeholder="Écris le nom">
                                        @error('last_name')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group mb-2">
                                        <label for="email">Email</label>
                                        <input type="text" 
                                            class="form-control  @error('email') is-invalid @enderror" id="email"
                                            name="email" value="{{ old('email') }}" placeholder="Écris le email">
                                        @error('email')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group mb-2">
                                        <label for="phone">Téléphone</label>
                                        <input type="text" 
                                            class="form-control  @error('phone') is-invalid @enderror" id="phone"
                                            name="phone" value="{{ old('phone') }}" placeholder="Écris le téléphone">
                                        @error('phone')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 mb-2">
                                        <label for="password">Mot de passe</label>
                                        <input type="password"
                                            class="form-control mb-1  @error('password') is-invalid @enderror"
                                            id="password" name="password" value="{{ old('password') }}"
                                            >
                                        @error('password')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                        {{-- <a class="text-decoration-none" href="">Forgot your password ?</a> --}}
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 mb-2">
                                        <label for="password_confirmation">Confirmation mot de passe</label>
                                        <input type="password"
                                            class="form-control mb-1  @error('password_confirmation') is-invalid @enderror"
                                            id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}"
                                            >
                                        @error('password_confirmation')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                        {{-- <a class="text-decoration-none" href="">Forgot your password ?</a> --}}
                                    </div>
                                </div>

                                @if (Session::has('error'))
                                    <div class="form-group">
                                        <small class="text-danger">
                                            {{ Session::get('error') }}
                                        </small>
                                    </div>
                                @endif

                                <div class="form-group mt-3 mb-2">
                                    <button type="submit" class="btn btn-primary w-100">Se Connecter</button>
                                </div>
                            </form>

                            Avez-vous un compte ?<a href="{{ route('auth.loginForm') }}" class="text-decoration-none  ml-2">Se connecter</a>
                            {{-- <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password</a> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>

</html>
