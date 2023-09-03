<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyAccountController extends Controller
{
    public function index(){
        return view('site.auth.profile');
    }

//    public function index(){
//        $user = Auth::user();
//        $name = $user->name;
//        $email = $user->email;
//        $phone = $user->phone;
//        $address =  $user->address;
//        return view('site.auth.profile',[
//            'name' => $name,
//            'email' => $email,
//            'phone' => $phone,
//            'address' => $address,
//        ]);
//    }

//    public function userProfile() {
//
//
//        return view('site.auth')
//    }
}
