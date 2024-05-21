<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Repositories\User\UserRepository;
use App\Http\Requests\Auth\RegisterRequest;

use Auth;
class AdminRegisterController extends Controller
{
    private $users;

    /**
     * AdminRegisterController constructor.
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users)
    {
        $this->middleware('guest');
        $this->users = $users;
    }

    public function registerForm()
    {
        return view('dashboard.admin.register');
    }

    public function register(RegisterRequest $request){
        $data = $request->all() +  [
            'role' => 'ADMIN',
            'status' => 'ACTIVE',
        ];
        $user = $this->users->create($data);
        toastr()->success('Compte créé avec succès');
       
        // return redirect()->route('dashboard.users.index');
        Auth::login($user);
        return redirect()->intended(RouteServiceProvider::ADMIN);
    }
}
