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
                        <div class="row">
                            <div class="d-none col-lg-6  d-lg-block">
                                <div class="login-image w-100 d-block row">
                                    <img class="col-12" src="{{ asset('assets/images/login-image.jpg') }}"
                                        alt="Logo">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="login-form">
                                    <h5 class="text-capitalize" style="font-weight: bold">Se connecter</h5>
                                    <form method="POST" action="{{ route('auth.login') }}">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label for="email">Email</label>
                                            <input type="text" autofocus
                                                class="form-control  @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}"
                                                placeholder="Email">
                                            @error('email')
                                                <small class="text-danger d-block">
                                                    {{ $message }}
                                                </small>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control mb-1  @error('password') is-invalid @enderror"
                                                id="password" name="password" value="{{ old('password') }}"
                                                placeholder="Password">
                                            @error('password')
                                                <small class="text-danger d-block">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                            {{-- <a class="text-decoration-none" href="">Forgot your password ?</a> --}}
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

                                    Vous n'avez pas de compte ?<a href="{{ route('auth.user.registerForm') }}"
                                        class="text-decoration-none  ml-2">Créer un nouveau compte</a>
                                    {{-- <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password</a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>
