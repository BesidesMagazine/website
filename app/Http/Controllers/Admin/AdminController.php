<?php

namespace app\Http\Controllers\Admin;

use App\Http\Requests\AdminAuthenticationRequest;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
        'login',
        'authenticate',
    ]]);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('index');
        } else {
            return view('admin.login');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }

    public function authenticate(AdminAuthenticationRequest $request)
    {
        if (Auth::attempt(['name' => 'admin', 'password' => $request->password])) {
            return redirect()->intended('article');
        } else {
            return redirect('login');
        }
    }
}
