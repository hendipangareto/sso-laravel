<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginSsoController extends Controller
{
    public function index()
    {
        return view('login-sso');
    }
}
