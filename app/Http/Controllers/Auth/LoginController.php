<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function submitLogin(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // dd( $data);


        if (auth()->attempt($data)) {
            if (auth()->user()->role == 'admin') {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            } elseif (auth()->user()->role == 'user') {
                if (auth()->user()->status == 'INACTIVE') {
                    Auth::logout();
                    toastr()->error("Votre compte n'est pas activé");
                    return redirect()->back();
                } elseif (auth()->user()->status == 'ACTIVE') {
                    return redirect()->intended(RouteServiceProvider::USER);
                }
            }
        }else{
            toastr()->error("L'email ou le mot de passe est incorrect");
            return redirect()->back();
        }
    }
}
