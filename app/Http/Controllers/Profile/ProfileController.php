<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function __invoke(Request $request)
    {
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }
}
