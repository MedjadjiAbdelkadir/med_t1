<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Repositories\User\UserRepository;
use App\Http\Requests\Auth\RegisterRequest;
use Auth;
class UserRegisterController extends Controller
{

    private $users;

    /**
     * UserRegisterController constructor.
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users)
    {
        $this->middleware('guest');
        $this->users = $users;
    }

    public function registerForm()
    {
        // dd("registerForm user");
        return view('auth.user_register');
    }

    public function register(RegisterRequest $request){

        $data = $request->all() +  [
            'role' => 'USER',
            'status' => 'ACTIVE',
        ];
        $user = $this->users->create($data);
        toastr()->success('Compte créé avec succès');       
        Auth::login($user);
        return redirect()->intended(RouteServiceProvider::USER);
    }
}
