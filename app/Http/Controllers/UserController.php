<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function login()
    {
        return view ('auth.user.loginPage');
    }

    public function google()
    {
        return 'google redirect';
    }
}
