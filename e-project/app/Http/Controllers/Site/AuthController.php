<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    public function index()
    {
        return view('site.auth.login');
    }

    public function registerForm() {
        return view('site.auth.register');
    }

    public function login(LoginRequest $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::guard('user')->attempt($data)) {
            return redirect()->route('site.home');
        }
        return redirect()->back();

    }

    protected function authenticated()
    {
        if(Auth::user()->role == '1') //1 = Admin Login
        {
            return redirect()->route('admin.home');
        }
        elseif(Auth::user()->role == '0') // Normal or Default User Login
        {
            return redirect()->route('home');
        }
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('site.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('site.login');
    }
}